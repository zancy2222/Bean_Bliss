<?php
session_start();
require_once('tcpdf/tcpdf.php'); // Include TCPDF

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$address = $_POST['address'];
$payment_method = $_POST['payment_method'];
$total_price = $_POST['total_price']; // Assume you send the total price from the frontend

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffee";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert order details into the database
$sql = "INSERT INTO orders (user_id, total_price, delivery_address, payment_method) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("idss", $user_id, $total_price, $address, $payment_method);

if ($stmt->execute()) {
    $order_id = $stmt->insert_id; // Get the inserted order ID

    // Generate receipt PDF
    $pdfUrl = generateReceipt($order_id, $user_id, $address, $payment_method, $total_price);
    
    echo $pdfUrl; // Return the PDF URL to JavaScript
} else {
    echo "Error placing order: " . $stmt->error;
}

$stmt->close();
$conn->close();
function generateReceipt($order_id, $user_id, $address, $payment_method, $total_price) {
    global $conn;

    // Fetch user details (first_name, last_name, and contact)
    $sql = "SELECT first_name, last_name, contact FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($first_name, $last_name, $contact);
    $stmt->fetch();
    $stmt->close();

    // Combine first name and last name
    $name = $first_name . ' ' . $last_name;

    // Create new PDF document
    $pdf = new TCPDF();
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Bean Bliss');
    $pdf->SetTitle('Receipt - Bean Bliss');
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'Receipt for Order ' . $order_id, 'Generated on: ' . date('Y-m-d H:i:s'));
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('helvetica', '', 12);

    // Add content to the PDF
    $html = '
    <h2>Bean Bliss Receipt</h2>
    <table border="1" cellpadding="5">
        <tr>
            <td><strong>Order ID:</strong></td><td>' . $order_id . '</td>
        </tr>
        <tr>
            <td><strong>Date of Order:</strong></td><td>' . date('Y-m-d H:i:s') . '</td>
        </tr>
        <tr>
            <td><strong>Customer Name:</strong></td><td>' . $name . '</td>
        </tr>
        <tr>
            <td><strong>Contact:</strong></td><td>' . $contact . '</td>
        </tr>
        <tr>
            <td><strong>Delivery Address:</strong></td><td>' . $address . '</td>
        </tr>
        <tr>
            <td><strong>Payment Method:</strong></td><td>' . $payment_method . '</td>
        </tr>
        <tr>
            <td><strong>Total Price:</strong></td><td>PHP: ' . number_format($total_price, 2) . '</td>
        </tr>
    </table>';

    // Output the HTML content
    $pdf->writeHTML($html, true, false, true, false, '');

    // Ensure the directory exists
    $directoryPath = $_SERVER['DOCUMENT_ROOT'] . '/bean_bliss/receipts';
    if (!is_dir($directoryPath)) {
        mkdir($directoryPath, 0777, true); // Create the directory if it doesn't exist
    }

    // File path to save the PDF (relative path)
    $filePath = $directoryPath . '/receipt_' . $order_id . '.pdf';

    // Save the PDF to the specified path
    $pdf->Output($filePath, 'F'); // F for file, saves it to the specified path

    // Return the relative URL for the PDF (for download)
    $pdfUrl = "/bean_bliss/receipts/receipt_" . $order_id . ".pdf";

    // Return the URL as a response (instead of echoing text)
    echo $pdfUrl;
    exit; // Ensure no further code is executed
}


?>

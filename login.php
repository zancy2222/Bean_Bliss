<?php
// login.php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Query to check if user exists
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['user_id'] = $row['id'];  // Save user id in session
            header("Location: main.php");  // Redirect to the main page
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email.";
    }
}
?>

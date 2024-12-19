<?php
// register.php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $zip_code = mysqli_real_escape_string($conn, $_POST['zip_code']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $region = mysqli_real_escape_string($conn, $_POST['region']);
    $barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Secure password

    // SQL query to insert user data
    $sql = "INSERT INTO users (first_name, last_name, middle_name, contact, address, zip_code, country, region, barangay, city, email, password) 
            VALUES ('$first_name', '$last_name', '$middle_name', '$contact', '$address', '$zip_code', '$country', '$region', '$barangay', '$city', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('New record created successfully');
        window.location.href = 'index.php'; // Redirect to index.php
      </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<?php
require 'koneksi.php';

// Get form data
$username =  $_POST["Username"];
$email = $_POST["Email"];
$password = $_POST["Password"];

// Validate password length (minimum 8 characters)
if (strlen($password) < 8) {
    echo "Password harus diisi minimal 8 karakter.";
    exit();
}

// Prepare the SQL query
$query_sql = "INSERT INTO user_detail (username, email, password) 
              VALUES ('$username', '$email', '$password')";

// Execute the query
if (mysqli_query($koneksi, $query_sql)) {
    // Redirect to login page on successful registration
    header("Location: login.html");
} else {
    // Display error message if the registration fails
    echo "Registrasi gagal: " . mysqli_error($koneksi);
}
?>

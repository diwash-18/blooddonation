<?php
$servername = "localhost";
$username = "root"; // Default XAMPP username for MySQL
$password = ""; // Default XAMPP MySQL password is empty
$dbname = "blood_donation_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

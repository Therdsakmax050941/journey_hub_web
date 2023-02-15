<?php 
// Database credentials
$server = "localhost";
$username = "root";
$password = "";
$dbname = "journey";

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character set to utf8
mysqli_set_charset($conn, "utf8");

// Perform queries
// ...

?>
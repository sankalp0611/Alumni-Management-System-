<?php
// Database configuration
$host = "localhost";        // Database host (usually localhost)
$username = "root";         // Database username
$password = "";             // Database password
$dbname = "alumni_management";  // Database name

// Create a new connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

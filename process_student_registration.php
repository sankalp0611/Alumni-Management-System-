<?php
// Get form data
$initials = $_POST['initials'];
$first_name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$usn = $_POST['usn'];

// Validate inputs
if (empty($initials) || empty($first_name) || empty($surname) || empty($email) || empty($username) || empty($password) || empty($usn)) {
    echo "Please fill in all fields.";
    exit;
}

// Hash the password before storing it
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'alumni_management');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to insert student data into the 'students' table
$sql = "INSERT INTO students (initials, name, surname, email, username, password, usn) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Check if the statement was prepared successfully
if ($stmt === false) {
    die('Error preparing the query: ' . $conn->error);
}

// Bind parameters to the statement
$stmt->bind_param('sssssss', $initials, $first_name, $surname, $email, $username, $hashed_password, $usn);

// Execute the query
if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error executing query: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>

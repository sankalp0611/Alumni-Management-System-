<?php
// Set the admin username, email, and password
$username = 'admin'; // Admin username
$email = 'shashwathshashu15@gmail.com'; // Admin email
$password = 'qwerty123'; // Admin password

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'alumni_management');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the admin user into the database
$sql = "INSERT INTO admins (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

// Check if the statement was prepared successfully
if ($stmt === false) {
    die('Error preparing the query: ' . $conn->error);
}

// Bind the parameters and execute the query
$stmt->bind_param('sss', $username, $email, $hashed_password);
if ($stmt->execute()) {
    echo "Admin user created successfully!";
} else {
    echo "Error inserting admin: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>

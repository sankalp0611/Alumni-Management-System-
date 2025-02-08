<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data from POST request
    $initials = $_POST['initials'];
    $first_name = $_POST['first_name'];  // Make sure this matches the name attribute in HTML
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $graduation_year = $_POST['graduation_year'];

    // Hash password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'alumni_management');

    // Check for a database connection error
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert alumni data
    $sql = "INSERT INTO alumni (initials, first_name, surname, email, username, password, graduation_year) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die('Error preparing the query: ' . $conn->error);
    }

    // Bind parameters to the statement
    // Ensure that the variable names used here match those used earlier (first_name, surname, etc.)
    $stmt->bind_param('ssssssi', $initials, $first_name, $surname, $email, $username, $hashed_password, $graduation_year);

    // Execute the query
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error executing query: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

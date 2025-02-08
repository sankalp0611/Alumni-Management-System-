<?php
session_start();

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role']; // To differentiate between alumni, student, admin

// Validate inputs
if (empty($username) || empty($password) || empty($role)) {
    echo "Please fill in all fields.";
    exit;
}

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'alumni_management');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the table based on role
$table = '';
if ($role == 'student') {
    $table = 'students';
} elseif ($role == 'alumni') {
    $table = 'alumni';
} elseif ($role == 'admin') {
    $table = 'admins';
} else {
    echo "Invalid role.";
    exit;
}

// SQL query to check if the username exists
$sql = "SELECT * FROM $table WHERE username = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die('Error preparing the query: ' . $conn->error);
}

// Bind the username parameter
$stmt->bind_param('s', $username);

// Execute the query
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    // Verify the password
    if (password_verify($password, $user['password'])) {
        // Login successful
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $role;

        // Redirect to dashboard or appropriate page based on role
        if ($role == 'admin') {
            header("Location: admin_dashboard/admin_dashboard.php"); // Admin dashboard
        } elseif ($role == 'student') {
            header("Location: student_dashboard/student_dashboard.php"); // Student dashboard
        } else {
            header("Location: alumni_dashboard/alumni_dashboard.php"); // Alumni dashboard
        }
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "User not found.";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Sign Up</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h2>Student Sign Up</h2>
  <form action="process_student_registration.php" method="POST">
    <!-- Include necessary fields for student sign-up -->
    <label for="student-name">Name:</label>
    <input type="text" id="student-name" name="name" required>
    <label for="student-usn">USN:</label>
    <input type="text" id="student-usn" name="usn" required>
    <button type="submit">Sign Up</button>
  </form>
</body>
</html>

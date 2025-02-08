<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alumni Sign Up</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h2>Alumni Sign Up</h2>
  <form action="process_alumni_registration.php" method="POST">
    <!-- Include necessary fields for alumni sign-up -->
    <label for="alumni-name">Name:</label>
    <input type="text" id="alumni-name" name="name" required>
    <label for="alumni-graduation-year">Graduation Year:</label>
    <input type="number" id="alumni-graduation-year" name="graduation_year" required>
    <button type="submit">Sign Up</button>
  </form>
</body>
</html>

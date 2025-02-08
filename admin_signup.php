<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Sign Up</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h2>Admin Sign Up</h2>
  <form action="process_admin_registration.php" method="POST">
    <!-- Include necessary fields for admin sign-up -->
    <label for="admin-name">Name:</label>
    <input type="text" id="admin-name" name="name" required>
    <label for="admin-email">Email:</label>
    <input type="email" id="admin-email" name="email" required>
    <button type="submit">Sign Up</button>
  </form>
</body>
</html>

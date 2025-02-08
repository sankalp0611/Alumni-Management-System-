<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ISE Alumni Management System</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    /* Ensure the image fits the page */
    .header-image {
      width: 100%;
      height: auto;
      display: block;
    }
    .container {
      text-align: center;
      margin: 0 auto;
      max-width: 600px;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Top Header Image -->
    <img src="/Alumni%20Management%20System/images/new_image.png" alt="RV College of Engineering" class="header-image">

    <h1>ISE - Alumni Management System </h1>
    
    <!-- Login Form -->
    <div class="tab-content">
      <h2>Login</h2>
      <form id="loginForm" method="POST" action="process_login.php">
        <label for="login-role">Select Role:</label>
        <select id="login-role" name="role" required>
          <option value="">--Select--</option>
          <option value="alumni">Alumni</option>
          <option value="student">Student</option>
          <option value="admin">Admin</option>
        </select>

        <label for="login-username">Username:</label>
        <input type="text" id="login-username" name="username" placeholder="Enter your username" required>

        <label for="login-password">Password:</label>
        <input type="password" id="login-password" name="password" placeholder="Enter your password" required>

        <button type="submit">Login</button>
      </form>

      <!-- Optional link to registration -->
      <p>Don't have an account? <a href="index.html">Sign Up</a></p>
    </div>
  </div>

  <script>
    // JavaScript can be added here for additional client-side validation or features
    document.getElementById("loginForm").addEventListener("submit", function(event) {
      const role = document.getElementById("login-role").value;
      if (!role) {
        alert("Please select a role.");
        event.preventDefault();
      }
    });
  </script>
</body>
</html>

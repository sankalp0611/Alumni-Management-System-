document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent form from submitting
  
    // Get form values
    const role = document.getElementById('role').value;
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
  
    // Validate input (basic check)
    if (role && username && password) {
      document.getElementById('message').style.color = "green";
      document.getElementById('message').textContent = `Login successful as ${role}`;
      // TODO: Send login data to backend
    } else {
      document.getElementById('message').textContent = "Please fill all fields.";
    }
  });
  
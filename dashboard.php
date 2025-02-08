<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Dashboard</title>
    <link rel="stylesheet" href="alumni_dashboard.css">
    <style>
        /* Styling for the header image */
        .header-image {
            width: 100%;
            max-height: 200px;
            object-fit: contain;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Top Header Image -->
        <img src="/Alumni%20Management%20System/images/new_image.png" alt="RV College of Engineering" class="header-image">

        <!-- Header -->
        <header>
            <h1>Welcome, Alumni <span><?php echo htmlspecialchars($username); ?></span>!</h1>
            <p>Your portal to stay connected with your alma mater and fellow alumni.</p>
        </header>

        <!-- Main Dashboard Sections -->
        <div class="dashboard-content">
            <!-- Profile Section -->
            <section class="profile-section">
                <h2>Your Profile</h2>
                <p>Manage and update your personal and professional details.</p>
                <a href="profile.php" class="button">Edit Profile</a>
            </section>

            <!-- Network Section -->
            <section class="network-section">
                <h2>Alumni Network</h2>
                <p>Connect with your batchmates and explore the alumni community.</p>
                <a href="network.php" class="button">Explore Network</a>
            </section>
        </div>

        <!-- Footer -->
        <footer>
            <a href="logout.php" class="logout-button">Logout</a>
        </footer>
    </div>
</body>
</html>

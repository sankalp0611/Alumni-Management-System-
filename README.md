# Alumni Management System

## 📌 Project Overview
The **Alumni Management System** is a web-based platform developed using **PHP, MySQL, HTML, CSS, and JavaScript** to connect **students and alumni** for mentorship and career guidance. It facilitates networking by allowing students to send connection requests, which are reviewed by an admin before approval. Alumni can also engage through direct messaging once a connection is approved.

---

## ⚙️ Features
- **User Authentication**: Secure login and registration for **students, alumni, and admins**.
- **Connection Requests**: Students can request connections with alumni, subject to admin approval.
- **Alumni Network**: View and explore alumni based on graduation year, location, and profession.
- **Messaging System**: Once connected, users can chat with alumni through a built-in messaging system.
- **Alumni Statistics**: Insights into alumni distribution across countries, professions, and industries.
- **Admin Dashboard**: Manage connection requests and maintain user data securely.

---

## 🛠️ Technologies Used
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP, MySQL
- **Database**: MySQL for storing user details, connections, messages, and statistics
- **Additional Libraries**: Chart.js (for visualizing alumni data)

---

## 🚀 Installation Guide
### 1️⃣ Prerequisites
- Install **XAMPP** (or any LAMP/WAMP server for running PHP & MySQL)
- Download and configure **Git** (if using version control)

### 2️⃣ Setup Steps
1. Clone the repository:
   ```bash
   git clone https://github.com/your-repository/alumni-management-system.git
   ```
2. Move the project folder to `C:/xampp/htdocs/` (for XAMPP users)
3. Start Apache and MySQL in XAMPP
4. Import the database:
   - Open **phpMyAdmin** (`http://localhost/phpmyadmin`)
   - Create a new database named `alumni_db`
   - Import `database/alumni_db.sql` from the project folder
5. Configure database connection in `db_connection.php`:
   ```php
   $conn = new mysqli("localhost", "root", "", "alumni_db");
   ```
6. Run the project in a browser:
   ```
   http://localhost/alumni-management-system/
   ```

---

## 🔍 Working of Each Module

### 🔹 **User Authentication**
- Users (students, alumni, admin) register and log in securely.
- The system validates credentials using PHP and MySQL.

### 🔹 **Connection Requests**
- Students send connection requests to alumni.
- Requests must be approved by the admin before students can message alumni.

### 🔹 **Alumni Network**
- Users can search and filter alumni based on graduation year, country, and profession.
- Connection requests are initiated from this section.

### 🔹 **Messaging System**
- After a request is approved, students and alumni can exchange messages.
- The system uses PHP and MySQL to store and retrieve messages in real time.

### 🔹 **Alumni Statistics**
- Displays career paths, country-wise alumni distribution, and other statistics using **Chart.js**.
- Helps institutions analyze trends and alumni engagement.

### 🔹 **Admin Dashboard**
- Manages student-alumni connections and approves/rejects connection requests.
- Admins have full control over user management and system analytics.

---

## 🎯 Future Enhancements
✅ **Mobile App Integration** – Develop an Android/iOS app for accessibility.
✅ **AI-Based Recommendations** – Suggest alumni based on user interests.
✅ **Event Management** – Enable alumni to create and manage networking events.
✅ **Automated Notifications** – Email and SMS alerts for updates and approvals.

---

## 🤝 Contributors
- **[Sankalp Chaudhary]** – Developer
- **[Sankalp Chaudhary and Shashwath SH]** – Backend & Frontend Development

---

## 📜 License
This project is open-source and available under the **MIT License**.

---


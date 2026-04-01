# 🧑‍💼 PHP Login System (Homework 3A)

A simple **PHP + MySQL Login System** built as part of Homework 3A.  
This project demonstrates authentication using **prepared statements** and **password verification**.

---

## 🚀 Features

- 🔐 Secure Login System
- 🛡️ Password verification using `password_verify()`
- 📦 MySQL database integration
- 🧾 Session handling
- 🎨 Simple Bootstrap UI

---

## 🛠️ Tech Stack

- PHP
- MySQL
- HTML5
- Bootstrap 5

---

## 📂 Project Structure


homework-3a/
│── db.php # Database connection
│── login.php # Login page
│── home.php # Dashboard after login
│── logout.php # Logout functionality
│── style.css # Styling (if any)


---

## ⚙️ Setup Instructions

1. Clone the repository:
```bash
git clone https://github.com/Harshalv21/PHP-Homework.git
Move project to XAMPP:
C:\xampp\htdocs\
Start:
Apache
MySQL
Create database:
CREATE DATABASE your_db_name;

CREATE TABLE manager (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255)
);
Insert sample user:
INSERT INTO manager (username, password)
VALUES ('admin', '<?php echo password_hash("admin123", PASSWORD_DEFAULT); ?>');
Open in browser:
http://localhost/homework-3a/login.php
📸 Screenshots
🔑 Login Page

🏠 Dashboard

🔒 Security Features
Uses prepared statements to prevent SQL injection
Uses password hashing
Session-based authentication
❗ Common Issues
❌ MySQL not running → Start XAMPP
❌ Wrong DB credentials → Check db.php
❌ Password not working → Ensure it's hashed

👨‍💻 Author

Harshal Vernekar
GitHub: https://github.com/Harshalv21

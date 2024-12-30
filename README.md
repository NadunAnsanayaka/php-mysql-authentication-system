# PHP and MySQL Authentication System

A responsive user authentication system built with **PHP** and **MySQL**, featuring secure sign-up, login, and session management. This project includes password hashing, form validation, and error handling, complemented by a modern user interface.

---
![image](https://github.com/user-attachments/assets/9518132e-b5fb-473d-95c1-18c4ad7b9e9e)

## Features

- **Sign-Up Page**: User registration with validation for inputs, including username, email, and password.
- **Login Page**: Secure login with session management.
- **Session Handling**: Ensures logged-in users stay authenticated.
- **Error Feedback**: Provides meaningful error messages for invalid inputs and authentication errors.
- **Responsive Design**: Optimized for different screen sizes with modern UI design.

---

## Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- A web server like Apache or Nginx

---

## Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/NadunAnsanayaka/php-mysql-authentication-system.git
   cd php-mysql-authentication-system
   ```

2. **Set Up the Database**
   - Import the provided `database.sql` file into your MySQL server to create the necessary database and tables.
   ```sql
   CREATE DATABASE authentication_system;
   USE authentication_system;
   -- Include the SQL script to create tables and insert necessary data
   ```

3. **Configure the Database Connection**
   - Open the `includes/dbh.inc.php` file and update the database credentials:
     ```php
     $serverName = "localhost";
     $dbUsername = "your_username";
     $dbPassword = "your_password";
     $dbName = "authentication_system";
     ```

4. **Run the Application**
   - Start your web server and navigate to the project directory in your browser:
     ```
     http://localhost/php-mysql-authentication-system
     ```

---

## File Structure

```
project-folder
├── includes/
│   ├── dbh.inc.php         # Database connection script
│   ├── functions.inc.php   # Helper functions for validation and authentication
│   ├── signup.inc.php      # Backend logic for user registration
│   ├── login.inc.php       # Backend logic for user login
├── assets/
│   ├── background.webp     # Background image
│   ├── style.css           # CSS for the UI
├── index.php               # Home page
├── signup.php              # Sign-up page
├── login.php               # Login page
├── footer.php              # Footer template
├── header.php              # Header template
├── README.md               # Documentation
```

---

## Technologies Used

- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS (with responsive design)

---

## Future Enhancements

- Add email verification for sign-up.
- Implement password reset functionality.
- Enhance security by integrating prepared statements and CSRF protection.
- Add user roles (e.g., admin, regular user).

---


## Contribution

Feel free to fork this repository and submit pull requests for new features or bug fixes. Suggestions and feedback are welcome!

---

## Contact

For questions or suggestions, please contact:
- **Nadun Ansanayaka**
- GitHub:(https://github.com/NadunAnsanayaka)


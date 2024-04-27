<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        
        h1 {
            margin-top: 50px;
        }
        
        .registration-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border: none;
            cursor: pointer;
            margin: 10px;
            border-radius: 4px;
        }
        
        .registration-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>online Schedule Mannagement</h1>
        <div id="menu-bar">
            <a href="home.php">Home</a>
            <a href="Contactus.php" class="contact_us">contact-us</a>
            <a href="Userprofile.php" class="user-profile">Profile</a>

        </div>
    </div>
    <h1>Select Registration Option</h1>
    
    <a href="stdlogin.php" class="registration-button">Student Login</a>
    <a href="teacherlogin.php" class="registration-button">Teacher login</a>

    <script>
        function studentLogin() {
            // Add your student login logic here
            alert("Student Login clicked");
        }
        
        function adminLogin() {
            // Add your admin login logic here
            alert("Admin Login clicked");
        }
    </script>
</body>
</html>

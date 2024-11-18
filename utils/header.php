<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Event Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff; 
            color: #333; 
        }
        header {
            background-color: #007bff; 
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        nav ul li a:hover {
            color: #ccc;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        .jumbotron {
            background-color: #cce5ff; 
            padding: 50px 20px;
            text-align: center;
            margin-top: 20px;
        }
        .jumbotron h1 {
            font-size: 36px;
            color: #007bff; 
            font-family: 'Helvetica Neue', sans-serif;
            text-shadow: none;
        }
    </style>
</head>
<body>
    <header> 
        <div class="container">
            <h2>College Event Management System</h2>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="aboutus.php">About us</a></li>
                    <li class="btnlogout"><a class="btn btn-default navbar-btn" href="login_form.php">Login </a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="jumbotron">
            <h1>DeerEvents</h1>
        </div>
    </div>
</body>
</html>

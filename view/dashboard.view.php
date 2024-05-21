<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogwarts University - Home</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8d7da;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            color: white;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .container1 {
            max-width: 1200px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .welcome-message {
            font-size: 1.5em;
            margin-bottom: 20px;
            color: #333;
        }

        .sections {
            display: flex;
            justify-content: space-between;
        }

        .section {
            width: 30%;
            background-color: #ff9933;
            padding: 20px;
            border-radius: 8px;
            color: white;
            text-align: center;
        }

        .section a {
            color: white;
            text-decoration: none;
        }

        .section:hover {
            background-color: #e6891e;
        }
    </style>
</head>
<body>
    <header>
        <?php require "view/partials/navbar.php"; ?>
    </header>
    <!-- <div class="navbar">
        <div class="clgName"><p>Hogwarts University</p></div>
        <div class="menus">
        <a href="#">Home</a>
        <a href="#">Profile</a>
        <a href="#">Courses</a>
        <a href="logout.php">Logout</a></div>
    </div> -->

    <div class="container1">
        <div class="welcome-message">
            Welcome to Hogwarts University!
        </div>
        <div class="sections">
            <div class="section">
                <h3>Profile</h3>
                <p>View and edit your profile information.</p>
                <a href="#">Go to Profile</a>
            </div>
            <div class="section">
                <h3>Courses</h3>
                <p>Explore the courses offered this semester.</p>
                <a href="#">View Courses</a>
            </div>
            <div class="section">
                <h3>Logout</h3>
                <p>Logout from your account securely.</p>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around;
        }
        nav ul li {
            margin: 0;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }
        nav ul li a:hover {
            background-color: #555;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>   
                <li><a href="home.php">Home</a></li>
                <li><a href="contact_us.php">Contact us</a></li>
                <li><a href="about_us.php">About us</a></li>
            </ul>  
        </nav>
    </header>
</body>
</html>
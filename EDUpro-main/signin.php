<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image:url(images/signinbackground.jpg);
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            background-color: rgba(255, 192, 203, 0.5); /* Glass-like background color */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="includes/signinc.php" method="POST">
            <h1>Sign Up</h1>
            <input type="text" placeholder="First name" name="fname" required><br>
            <input type="text" placeholder="Last name" name="lname"><br>
            <input type="text" placeholder="Username" name="username" required><br>
            <input type="text" placeholder="Email" name="email" required><br>
            <input type="password" placeholder="Password" name="password"><br>
            <input type="password" placeholder="Repeat Password" name="repeatpassword" required><br>
            <button type="submit" name="submit">SIGN UP</button>
        </form>
    </div>
</body>
</html>

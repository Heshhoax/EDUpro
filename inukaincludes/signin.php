<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>User Signup</h2>
        <form action="inukasignup.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required><br>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required><br>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="mobileno">Mobile No:</label>
            <input type="text" id="mobileno" name="mobileno" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">SIGNUP</button>
        </form>
    </div>
</body>
</html>

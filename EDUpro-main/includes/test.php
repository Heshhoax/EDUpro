<?php
require_once('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    

    if (mysqli_query($conn, $query)) {
        echo "Records inserted successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome</h1>
    <form action="#" method="post">
        Username<input type="text" name="username"><br>
        Password<input type="text" name="password"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

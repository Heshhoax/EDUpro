<?php
require_once('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $mobileno = $_POST["mobileno"];
    $password = $_POST["password"];

    $query = "INSERT INTO lecturerinfo(username, fname, lname, gender, email, mobileno, password) VALUES ('$username', '$fname', '$lname', '$gender', '$email', '$mobileno', '$password')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Successfully recorded');</script>";
    } else {
        echo "<script>alert('Error');</script>";
    }
}


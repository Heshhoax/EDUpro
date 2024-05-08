<?php
require_once('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST["userid"];
    $username = $_POST["username"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $mobileno = $_POST["mobileno"];
    $password = $_POST["password"];

  
    $query = "UPDATE lecturerinfo SET username='$username', fname='$fname', lname='$lname', gender='$gender', email='$email', mobileno='$mobileno', password='$password' WHERE id='$userid'";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Profile updated successfully');</script>";
    } else {
        echo "<script>alert('Error updating profile');</script>";
    }
}
?>

<?php
session_start();

// Include database connection file
require_once("database.php");

// Check if form is submitted
if (isset($_POST["submit"])) {
    // Get username and password from form
    $username = $_POST['uid'];
    $password = $_POST['password'];

    // Check if form fields are empty
    if (empty($username) || empty($password)) {
        header("location: ../managerlogin.php?error=emptyfields");
        exit();
    }

    // Query database to check if admin credentials are valid
    $query = "SELECT * FROM manager WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (!$result || mysqli_num_rows($result) == 0) {
        // No admin found with the provided credentials
        header("location: ../managerlogin.php?error=invalidcredentials");
        exit();
    } else {
        // login successful, set session variables and redirect to admin dashboard
        $row = mysqli_fetch_assoc($result);
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['username'] = $row['username'];
        header("location: ../Hcrud.php");
        exit();
    }
} else {
    // If form is not submitted, redirect to admin login page
    header("location: ../managerlogin.php");
    exit();
}

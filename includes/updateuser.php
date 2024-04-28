<?php
// Include the database connection
require_once('database.php');

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $userID = $_POST['userID'];
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    // Update user information in the database
    $sql = "UPDATE userinfo SET username='$username', fname='$fname', lname='$lname', email='$email' WHERE ID='$userID'";
    if ($conn->query($sql) === TRUE) {
        header('location:../Heshancrud.php');
    } else {
        echo "Error updating user information: " . $conn->error;
    }
}

// Close the database connection
$conn->close();


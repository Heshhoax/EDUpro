<?php
   //if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    // SQL query to insert data into users table
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    // Attempt to execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Records inserted successfully.";
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
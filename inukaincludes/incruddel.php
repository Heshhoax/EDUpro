<?php

if(isset($_GET["L_ID"]))
    $deluser = $_GET['L_ID'];

    require_once('database.php');
    
    $query = "DELETE FROM lecturerinfo WHERE L_ID='$deluser'";
    
    if (mysqli_query($conn, $query)) {
        header("location:../Inukacrud.php");
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
<?php

if(isset($_GET["ID"]))
    $deluser = $_GET['ID'];

    require_once('database.php');
    
    $query = "DELETE FROM userinfo WHERE ID='$deluser'";
    
    if (mysqli_query($conn, $query)) {
        header("location:../Heshancrud.php");
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
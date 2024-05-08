<?php
require_once('database.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM lecturerinfo WHERE L_ID = $id";


    if(mysqli_query($conn, $query)) {

        header("Location: view_lecturers.php");
        exit();
    } else {
       
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    
    echo "ID parameter is missing.";
}


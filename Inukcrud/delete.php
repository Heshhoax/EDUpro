<?php

require_once('database1.php');

if(isset($_GET['C_ID'])){

$delete=$_GET['C_ID'];

$query = "DELETE FROM course WHERE C_ID='$delete'";

if(mysqli_query($conn,$query)){
    header("location:read.php");
}
else{
    echo'error';
}
}
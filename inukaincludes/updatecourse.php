<?php

require('database1.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
$cid=$_POST['C_ID'];
$title = $_POST['Title'];
$description = $_POST['Description'];
$image = $_POST['Image'];

$query="UPDATE course SET Title='$title',Description='$description' Image='$image' WHERE C_ID='$cid'";

if(mysqli_query($conn,$query)){
    header("location:read.php");
}
else{
    echo'error';
}

}

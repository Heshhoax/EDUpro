<?php

require('includes/database.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
$uid=$_POST['id'];
$name = $_POST['name'];
$pass = $_POST['pass'];

$query="UPDATE lecturerinfo SET username='$name',password='$pass' WHERE L_ID='$uid'";

if(mysqli_query($conn,$query)){
    header("location:lecturerlogin.php");
}
else{
    echo'error';
}

}

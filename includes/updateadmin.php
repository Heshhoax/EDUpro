<?php

require('database.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
$uid=$_POST['id'];
$name = $_POST['name'];
$pass = $_POST['pass'];

$query="UPDATE admin SET username='$name',password='$pass' WHERE ID='$uid'";

if(mysqli_query($conn,$query)){
    header("location:../adminlogin.php");
}
else{
    echo'error';
}

}

<?php

require('includes/database.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
$uid=$_POST['id'];
$name = $_POST['name'];
$pass = $_POST['pass'];

$query="UPDATE examiner SET username='$name',password='$pass' WHERE ID='$uid'";

if(mysqli_query($conn,$query)){
    header("location:../examinerlogin.php");
}
else{
    echo'error';
}

}

<?php

require('database.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
$uid=$_POST['id'];
$name = $_POST['name'];
$pass = $_POST['pass'];

$query="UPDATE manager SET username='$name',password='$pass' WHERE ID='$uid'";

if(mysqli_query($conn,$query)){
    header("location:../managerlogin.php");
}
else{
    echo'error';
}

}

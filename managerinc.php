<?php

require_once('database.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
$username = $_POST['username'];
$password = $_POST['password'];

$query="INSERT INTO manager(username,password) VALUES('$username','$password')";

if(mysqli_query($conn,$query)){
    echo"<script>alert('sucessfully recorded');</script>"
}
else{
    echo"<script>alert('error');</script>";
}

}
 ?>
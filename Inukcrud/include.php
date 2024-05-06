<?php

require_once('database1.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
$title = $_POST['title'];
$decription = $_POST['description'];
$image = $_POST['file'];

$query="INSERT INTO course(Title,Description,Image) VALUES('$title','$decription','$image')";

if(mysqli_query($conn,$query)){
    echo"<script>alert('sucessfully recorded');</script>";
}
else{
    echo"<script>alert('error');</script>";
}

}
 ?>
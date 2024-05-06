<?php

require_once('database1.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
$title = $_POST['Title'];
$decription = $_POST['Description'];
$image = $_POST['Image'];

$query="INSERT INTO course(Title,Description,Image) VALUES('$title','$decription','$image')";

if(mysqli_query($conn,$query)){
    echo'sucessfully recorded';
}
else{
    echo'error';
}

}
 ?>
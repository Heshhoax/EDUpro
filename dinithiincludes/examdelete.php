<?php
include 'createconn.php';
if(isset($_GET['deleteid'])){
    $Exam_ID=$_GET['deleteid'];

    $sql="delete from `exam55` where Exam_id=$Exam_ID";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo"Deleted successfully";
        header('location: read.php');
    }
    else{
        die(mysqli_error($con));
    }



}



?>
<?php
include '../includes/database.php';
if(isset($_GET['deleteid'])){
    $Exam_ID=$_GET['deleteid'];

    $sql="delete from `exam55` where Exam_id=$Exam_ID";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo"Deleted successfully";
        header('location: read.php');
    }
    else{
        die(mysqli_error($conn));
    }



}



?>
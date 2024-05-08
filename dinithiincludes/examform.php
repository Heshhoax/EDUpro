<?php
require_once '../includes/database.php';
if(isset($_POST['submit'])){
    
    $Exam_Name=$_POST['Exam_Name'];
    $Subject_ID=$_POST['Subject_ID'];
    $Date=$_POST['Date'];
    $Time=$_POST['Time'];
    $Duration=$_POST['Duration'];

    $sql="INSERT INTO `exam55`(`Exam_Name`,`Subject_ID`,`Date`,`Time`,`Duration`) VALUES('$Exam_Name','$Subject_ID','$Date','$Time','$Duration')";
    $result=mysqli_query($conn, $sql);
    if($result){
        //echo"Data inserted successfully";
        header('location:read.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewpoint" content = width-device-width, initial-scale=1, shrink-to-fit="no">
<title>Exam portal</title>
<link rel="stylesheet" href="dinithiexam.css">
</head>
<body>
    <h2>Exam portal</h2><br>

    <div class ="container">
        <form method="POST">

       
    <div class="form-group">
            <lable>Exam Name</lable>
            
            <select name="Exam_Name">
                <option selected disabled>select correct exam</option>
                <option value="Applied science">Applied science</option>
                <option value="Bussiness studies">Bussiness studies</option>   
                <option value="Contemparary arts">Contemperary arts</option>   
                <option value="Engneering">Engneering</option>   
                <option value="Humanities and sciences">Humanities and sciences</option>   
                <option value="Law">Law</option>   
                <option value="Medicine">Medicine</option>   
                <option value="Psycology">Psycology</option>   
                <option value="Social sciences">Social sciences</option>   
                <option value="Statistics">Statistics</option>   
            </select>
        </div><br>

        <div class="form-group">
            <lable>Subject ID</lable>
            <input type="text" placeholder="Enter subject ID" name="Subject_ID" required>
        </div><br>

        <div class="form-group">
            <lable>Date</lable>
            <input type="text" placeholder="Enter the date" name="Date" autocomplete="off" required>
        </div><br>

        <div class="form-group">
            <lable>Time </lable>
            <input type="text" placeholder="Enter the time" name="Time" required>
        </div><br>

        <div class="form-group">
            <lable>Duration</lable>
            <input type="text" placeholder="Enter the duration" name="Duration" required>
        </div><br><br>

        <button type="submit" class="btn btn-primary" name="submit">Create</button>

        </form>


</div>



</body>
</html>
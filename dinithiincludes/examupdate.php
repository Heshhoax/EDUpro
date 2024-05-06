<?php
require_once 'createconn.php';
$Exam_ID=$_GET['updateid']; 
$sql="SELECT * FROM exam55 WHERE Exam_ID=$Exam_ID";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$Exam_ID=$row['Exam_ID'];
$Exam_Name=$row['Exam_Name'];
$Subject_ID=$row['Subject_ID'];
$Date=$row['Date'];
$Time=$row['Time'];
$Duration=$row['Duration'];

if(isset($_POST['submit'])){
    $Exam_Name=$_POST['Exam_Name'];
    $Subject_ID=$_POST['Subject_ID'];
    $Date=$_POST['Date'];
    $Time=$_POST['Time'];
    $Duration=$_POST['Duration'];

    $sql="UPDATE `exam55` SET Exam_ID='$Exam_ID',Exam_Name='$Exam_Name',Subject_ID='$Subject_ID',Date='$Date',Time='$Time',Duration='$Duration'WHERE Exam_ID='$Exam_ID'";
    $result=mysqli_query($con, $sql);
    if($result){
        //echo"Updated successfully";
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
</head>
<body>
    <h2>Exam portal</h2><br>

    <div class ="container">
        <form method="POST">

       
    <div class="form-group">
            <lable>Exam Name</lable>
            
            <select name="Exam_Name">
                <option disabled>select correct exam</option>
                <option value="Applied science"<?php if($Subject_ID=="Applied science") echo"selected";?>>Applied science</option>
                <option value="Bussiness studies"<?php if($Subject_ID=="Bussiness studies") echo"selected";?>>Bussiness studies</option>   
                <option value="Contemparary arts"<?php if($Subject_ID=="Contemperary arts") echo"selected";?>>Contemperary arts</option>   
                <option value="Engneering"<?php if($Subject_ID=="Engneering") echo"selected";?>>Engneering</option>   
                <option value="Humanities and sciences"<?php if($Subject_ID=="Humanities and sciences") echo"selected";?>>Humanities and sciences</option>   
                <option value="Law"<?php if($Subject_ID=="Law") echo"selected";?>>Law</option>   
                <option value="Medicine"<?php if($Subject_ID=="Medicine") echo"selected";?>>Medicine</option>   
                <option value="Psycology"<?php if($Subject_ID=="Psycology") echo"selected";?>>Psycology</option>   
                <option value="Social sciences"<?php if($Subject_ID=="Social sciences") echo"selected";?>>Social sciences</option>   
                <option value="Statistics"<?php if($Subject_ID=="Statistics") echo"selected";?>>Statistics</option>   
            </select>
        </div><br>

        <div class="form-group">
            <lable>Subject ID</lable>
            <input type="text" placeholder="Enter subject ID" name="Subject_ID" required autocomplete="off" value=<?php echo $Subject_ID;?>>
        </div><br>

        <div class="form-group">
            <lable>Date</lable>
            <input type="text" placeholder="Enter the date" name="Date" autocomplete="off" required value=<?php echo $Date;?>>
        </div><br>

        <div class="form-group">
            <lable>Time </lable>
            <input type="text" placeholder="Enter the time" name="Time" required autocomplete="off" value=<?php echo $Time;?>>
        </div><br>

        <div class="form-group">
            <lable>Duration</lable>
            <input type="text" placeholder="Enter the duration" name="Duration" required value=<?php echo $Duration;?>>
        </div><br><br>

        <button type="submit" class="btn btn-primary" name="submit">Update</button>

        </form>


</div>



</body>
</html>

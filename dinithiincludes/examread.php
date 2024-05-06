<?php
include 'createconn.php';

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Exam portal</title>
        <link rel="stylesheet" href="dinithiexam.css">

    </head>
    <body>

    <div class="container">
       <button class="btn btn-primary my-5"><a href="create.php"class="text-light">Create Exam</a></button> 
       <table class="table">
        <thead>
            <tr>
                <th>Exam_ID</th>
                <th >Exam_Name</th>
                <th >Subject_ID</th>
                <th >Date</th>
                <th >Time</th>
                <th >Duration</th>
                <th >Operations</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $sql="select * from `exam55`";
        $result=mysqli_query($con,$sql);

        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $Exam_ID=$row['Exam_ID'];
                $Exam_Name=$row['Exam_Name'];
                $Subject_ID=$row['Subject_ID'];
                $Date=$row['Date'];
                $Time=$row['Time'];
                $Duration=$row['Duration'];
                echo '<tr>
                <th scope="row">'.$Exam_ID.'</th>
                <td>'.$Exam_Name.'</td>
                <td>'.$Subject_ID.'</td>
                <td>'.$Date.'</td>
                <td>'.$Time.'</td>
                <td>'.$Duration.'</td>
                <td>
            <button><a href="update.php? updateid='.$Exam_ID.'">Update</a></button>
            <button><a href="delete.php? deleteid='.$Exam_ID.'">Delete</a></button>
            </td>
                </tr>';
            }
           
        }
          
        
        ?>

        


        </tbody>



       </table>
    </div>
    </body>
</html>

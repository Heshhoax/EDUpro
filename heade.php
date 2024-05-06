<?php
require'includes/database.php';
session_start();
$id=$_SESSION['uid'];
$name=$_SESSION['username'];

$sql="SELECT pp FROM userdp WHERE ID=$id";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $displaypicture = $row['pp'];
}
else{
    $displaypicture = "images/default_profile_picture.png";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="heade.css">
    <link rel="stylesheet" href="Heshan.css">
</head>
<body>
   
    <div class="header">
        <img src="images/edupro_black.png" width="150" height="60" alt="EduPro Logo">
        <div >
        <div class="profile-picture" style="width: 50px; height: 50px;">
    <img src="<?php echo $displaypicture; ?>" alt="Profile Picture" style="width: 100%; height: 100%; border-radius:50%">
</div>

        </div>
        <!-- Sign Up Button -->
        <a href="signin.php" id="btn-sign" class="button" style="margin-left: 1450px;">Sign Up</a>
        
        <!-- Login Button -->
        <a href="login.php" id="login" class="button">Login</a>
       
    </div>
    
    <!-- Menu -->
    <div class="header1">
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Lessons</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="uploaddp.php">My Profile</a></li>
        </ul>
    </div>
</body>
</html>

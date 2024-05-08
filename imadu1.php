<?php
require'includes/database.php';
session_start();
$id=$_SESSION['uid'];
$name=$_SESSION['username'];

$sql="SELECT pp FROM userdp WHERE ID=$id";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$displaypicture=$row['pp'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Heshan.css">
    <script src="admin.js"></script>
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="sidebar">
        <div class="profile">
            <div class="profile-picture">
                <img src=<?php echo $displaypicture; ?> alt="Profile Picture">
            </div>
            <h3><?php echo $name; ?></h3>
            <p>Admin</p>
        </div>
        <ul class="menu">
            <li><a href="#" onclick="loadContent('settings')">Add profile photo</a></li>
            <li><a href="#" onclick="loadContent('payment')">payment Management</a></li>
            <li><a href="#" onclick="loadContent('reset')">Reset Password</a></li>
            <li><a href="#" onclick="loadContent('help')">Help and Support</a></li>
            <li><a href="#" onclick="logout()">Logout</a></li>
        </ul>
    </div>
    <div class="content" id="content">
        <!-- Content Goes Here -->
        <h1 style="color: white;">Admin Dashboard</h1>
        <p>Select an option from the menu to get started.</p>
    </div>
    <div id="contentload">
        
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='mainstyle.css'>
    <title>Lecturer Registration Form</title>
</head>
<div>
<body>
    <?php include('heeader.php');?>
<form action="inukaincludes/signlec.php" method="POST">
<div class="log" id="side10"> 
    <h1>Lecturer Registration Form</h1>
        <div class="reg">
            <div id="side5">  
                <label>Username :</label><input type="text"  name="username" class="inp-reg" required>
                <label>First Name :</label><input type="text"  name="fname" class="inp-reg">
                <label>Email :</label> <input type="email" name="email" class="inp-reg" required>
                <label>Enter NIC :</label><input type="text"  name="nic" class="inp-reg" required>
                <label>Password :</label><input type="password"  name="password" class="inp-reg" required>
                <label>Specialization :</label><input type="text"  name="Specialization" class="inp-reg" required>
                <label>Age :</label><input type="text"  name="age" class="inp-reg" required>
            </div>  
            <div id="side55">   
                <label>Gender :</label><br>
                <input type="radio" name="gender" value="Male"  required><label>Male</label>
                <input type="radio" name="gender" value="Female"  required><label>Female</label><br><br>
                <label>Last Name :</label><input type="text"  name="lname" class="inp-reg" required><br>
                <label>Mobile No :</label><input type="text"  name="mobileno" class="inp-reg" required><br><br>
                <label>Confirmed Password :</label><input type="password" name="confirmedpassword" class="inp-reg" required><br><br>
                <label>D.O.B :</label><input type="date"  name="dob" class="inp-reg" required>
            </div>
                
        </div>
        <input type="text" placeholder="Working Experiences" name="Experiences" class="inp-area" required>
            <div id="pripol">
                <h5><a href="#">Privacy And Policy</a></h5>
            </div>  
        <button type="submit" id="register" name="submit">Register</button>
    </form>
</div>

<?php include('footer.php');?>  
</body>
</html>
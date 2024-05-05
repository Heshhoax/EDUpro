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
                <label>Specialization :</label> 
                    <select id="specialization" name="Specialization" class="inp-reg"  required>
                        <option value="specialization">Select Specialization</option>
                        <option value="ITSIT">BSc(Hons) in Information Technology Specializating in Information Technology</option>
                        <option value="ITSCSNE">BSc(Hons) in Information Technology Specializating in Computer System & Network Engineering</option>
                        <option value="ITSSE">BSc(Hons) in Information Technology Specializating in Software Engineering</option>
                        <option value="ITSISE">BSc(Hons) in Information Technology Specializating in Information Systems Engineering</option>
                        <option value="ITSCS">BSc(Hons) in Information Technology Specializating in Cyber Security</option>
                        <option value="ITSTM">BSc(Hons) in Information Technology Specializating in Interactive Media</option>
                        <option value="ITSDS">BSc(Hons) in Information Technology Specializating in Data Science</option>
                    </select>    
                <label>Age :</label><input type="text"  name="age" class="inp-reg" required>
            </div>  
            <div id="side55">   
                <label>Gender :</label><br>
                <input type="radio" name="gender" value="Male"  required><label>Male</label>
                <input type="radio" name="gender" value="Female"  required><label>Female</label><br>
                <label>Last Name :</label><input type="text"  name="lname" class="inp-reg" required><br>
                <label>Mobile No :</label><input type="text"  name="mobileno" class="inp-reg" required><br>
                <label>Confirmed Password :</label><input type="password" name="confirmedpassword" class="inp-reg" required><br>
                <label>Subject :</label>
                <select id="Subject" name="Subject"  class="inp-reg"  required>
                    <option value="subject">Select Subject</option>
                    <option value="OOC"> Object Oriented Concept</option>
                    <option value="CSNE"> Computer System & Network Engineering</option>
                    <option value="MC">Mathematics Computing</option>
                    <option value="SPM">Software Process Modeling</option>
                    <option value="IP">Programming</option>
                    <option value="CS">Comunicatin Skill</option>
                    <option value="ISDM">Information System Identify Module</option>
                </select>    
                <label>D.O.B :</label><input type="date"  name="dob" class="inp-reg" required>
            </div>
                
        </div>
        <input type="text" placeholder="Working Experiences" name="Experiences" class="inp-area" required>
            <div id="pripol">
                <input type="checkbox" name="terms" value="termsandconditions" class="term" required><label>I agreed to Terms and Conditions</label>
                <h5><a href="#">Privacy And Policy</a></h5>
            </div>  
        <button type="submit" id="register" name="submit">Register</button>
    </form>
</div>

<?php include('footer.php');?>  
</body>
</html>
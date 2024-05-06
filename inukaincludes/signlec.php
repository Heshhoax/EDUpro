<?php
    $username = $_POST["username"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender=$_POST["gender"];
    $email = $_POST["email"];
    $mobileno=$_POST["mobileno"];
    $nic=$_POST["nic"];
    $password = $_POST["password"];
    $specialization = $_POST["specialization"];
    $subject = $_POST["subject"];
    $dob = $_POST["dob"];
    $Experiences = $_POST["Experiences"];
    
    require_once('database.php');
    require_once('function.php');
    
    $emptyinputs = emptyinputsignup($username, $fname, $lname, $gender,  $email, $mobileno,$nic, $password,$specialization,$subject,$dob,$Experiences);
    $invalidusername = invalidusername($username);      
    $invalidemail = invalidemail($email);
    $passmatch = passmatch($password,  $confirmedpassword);
    $lidexist = lidexist($conn, $username, $email); 
   
    if ($emptyinputs !== false) {
        header('location:../signlecturer.php?error=emptyinput');
        exit('');
    }
    if ($invalidusername !== false) {
        header('location:../signlecturer.php?error=invalidusername');
        exit('');
    }
    if ($invalidemail !== false) {
        header('location:../signlecturer.php?error=invalidemail');
        exit('');
    }
    if ($passmatch !== false) {
        header('location:../signlecturer.php?error=passnotmatch');
        exit('');
    }
   
    if ($lidexist !== false) {
        header('location:../signlecturer.php?error=uidexist');
        exit('');
    }
    // If all checks pass, proceed to create the user
    createlecturer($username, $fname, $lname, $gender,  $email, $mobileno,$nic, $password,$confirmedpassword,$specialization,$subject,$dob,$Experiences);
    

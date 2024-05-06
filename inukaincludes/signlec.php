<?php
    $username = $_POST["username"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender=$_POST["gender"];
    $nic=$_POST["nic"];
    $email = $_POST["email"];
    $mobileno=$_POST["mobileno"];
    $password = $_POST["password"];
    $confirmedpassword = $_POST["confirmedpassword"];
    $specialization=$_POST["specialization"];
    $subject = $_POST["subject"];
    $dob = $_POST["dob"];
    $Experiences = $_POST["Experiences"];
    
    require_once('database.php');
    require_once('function.php');
    
    $emptyinputs = emptyinputsignup($username, $fname, $lname, $gender,  $nic, $email, $mobileno, $password);
    $invalidusername = invalidusername($username);      
    $invalidemail = invalidemail($email);
    $passmatch = passmatch($password,  $confirmedpassword);
    $liddexist = lidexist($conn, $username, $email); 
   
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
    createuser($username, $fname, $lname, $gender,  $nic, $email, $mobileno, $password);
    

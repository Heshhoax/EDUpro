<?php
    $username = $_POST["username"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repeatpassword = $_POST["repeatpassword"];
    
    require_once('database.php');
    require_once('function.php');
    
    $emptyinputs = emptyinputsignup($username, $fname, $lname, $email, $password);
    $invalidusername = invalidusername($username);      
    $invalidemail = invalidemail($email);
    $passmatch = passmatch($password, $repeatpassword);
    $uidexist = uidexist($conn, $username, $email); 
   
    if ($emptyinputs !== false) {
        header('location:../signin.php?error=emptyinput');
        exit('');
    }
    if ($invalidusername !== false) {
        header('location:../signin.php?error=invalidusername');
        exit('');
    }
    if ($invalidemail !== false) {
        header('location:../signin.php?error=invalidemail');
        exit('');
    }
    if ($passmatch !== false) {
        header('location:../signin.php?error=passnotmatch');
        exit('');
    }
   
    if ($uidexist !== false) {
        header('location:../signin.php?error=uidexist');
        exit('');
    }
    // If all checks pass, proceed to create the user
    createuser($conn, $username, $fname, $lname, $email, $password);
    

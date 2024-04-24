<?php
// Checking if user fills all the entries
function emptyinputsignup($username, $fname, $lname, $email, $password) {
    $result = empty($username) || empty($fname) || empty($lname) || empty($email) || empty($password);
    return $result; 
}

// Validating username
function invalidusername($username) {
    $result = !preg_match("/^[a-zA-Z0-9]*/", $username);
    return $result;
}

// Validating email
function invalidemail($email) {
    $result = !filter_var($email, FILTER_VALIDATE_EMAIL);
    return $result;
}

// Matching passwords
function passmatch($password, $repeatpassword) {
    $result = $password !== $repeatpassword;
    return $result;
}

// Finding the existence of the same username
function uidexist($conn, $username, $email) {
    $sql = "SELECT * FROM userinfo WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../signup.html?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultdatabase = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultdatabase)) {
        mysqli_stmt_close($stmt);
        return $row;
    }else{
        mysqli_stmt_close($stmt);
        return false;
    } 
    
}
// Create user
function createuser($conn, $username, $fname, $lname, $email, $password) {
    $sql = "INSERT INTO userinfo (username, fname, lname, email, pwd) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../signup.html?error=stmtfailed");
        exit();
    }
    $hash = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sssss", $username, $fname, $lname, $email, $hash);
    mysqli_stmt_execute($stmt);
    echo"registration successful";
    mysqli_stmt_close($stmt);
    header("location:logininc.php?error=none");
    exit('');
}
//CHECKING EMPTY FIELS IN LOGIN

function emptyinputslogin($username, $password) {
    $result = empty($username) || empty($password);
    return $result; 
}

//LOGIN USER
function loginuser($conn,$username,$password){
    $uidexist=uidexist($conn, $username, $username);
    if ($uidexist === false) {
        header('location:../login.php?error=logininvalid1');
        exit();
    }
    $hash = $uidexist["pwd"];
    $checkpwd = password_verify($password, $hash);

    if ($checkpwd === false) {
        header("location:../login.php?error=logininvalid2");
        exit();
    }else if ($checkpwd === true) {

        session_start();
        $_SESSION["uid"] = $uidexist["userid"];
        $_SESSION["username"] = $uidexist["username"];
        header('location:../welcome.php');
        exit();
    }

}
<?php
// Checking if lecturer fills all the entries
function emptyinputsignup($username, $fname, $lname, $gender,  $nic, $email, $mobileno, $password) {
    $result = empty($username) || empty($fname) || empty($lname) || empty($gender) || empty($nic)  || empty($email) || empty($mobileno) || empty($password);
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
function passmatch($password, $confirmedpassword) {
    $result = $password !== $confirmedpassword;
    return $result;
}

// Finding the existence of the same username
function uidexist($conn, $username, $email) {
    $sql = "SELECT * FROM lecturerinfo WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../signlecturer.html?error=stmtfailed");
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
// Create lectureraccount
function createuser($conn, $username, $fname, $lname,$gender, $email,$mobileno,$nic,$specialization, $password) {
    $sql = "INSERT INTO lecturerinfo (username, fname, lname,gender, email,,mobileno,nic,specialization, password ) VALUES (?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../signlecturer.html?error=stmtfailed");
        exit();
    }
    $hash = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sssss", $username, $fname, $lname, $email, $hash);
    mysqli_stmt_execute($stmt);
    echo"registration successful";
    mysqli_stmt_close($stmt);
    header("location:loginlec.php?error=none");
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

<?php
   //if(isset($_POST["submit"])){
    $username=$_POST['uid'];
    $password=$_POST['password'];

    
    require_once("database.php");
    require_once("function.php");
    
   if(emptyinputslogin($username,$password)!== false){
      header("location:../login.php");
        exit('');
   }
        loginuser($conn,$username,$password);
   
    ?>

<?php
   //if(isset($_POST["submit"])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    
    require_once("database.php");
    require_once("function.php");
    
   if(emptyinputslogin($username,$password)!== false){
      header("location:loginlec.php");
        exit('');
   }
        loginuser($conn,$username,$password);
   
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome</h1>
    <form action="#" method="post">
        Username<input type="text" name="username"><br>
        Password<input type="text" name="password"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
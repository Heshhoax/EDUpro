<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='mainstyle.css'>
    
</head>
<body>
    <?php include('heeader.php');?>
    <div class="log" id="side">
        <h2>Login Form</h2>
        <div id="side15">  
            <label>UserName/Email :</label><input type="text" class="inp-btn" required><br><br>
            <label>Password :</label><input type="password" class="inp-btn1" required>
            <h5>Forgot Password ?</h5>
        </div>
                <div class="log1">
                <button id="login">Login</button>
                <h6>Create New Account !</h6>
                <button id="login1">Admin Login</button>
       </div>
    </div>
    <?php include('footer.php');?>
</body>
</html>
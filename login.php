<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <form action="includes/logininc.php" method="POST">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" placeholder="Enter Username/Email" name="uid">
      </div>
      <div class="input-box">
        <input type="password" placeholder="Enter Password" name="password">
        
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn" name="submit">Login</button>
      <div class="register-link">
        <p>Dont have an account? <a href="signin.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>
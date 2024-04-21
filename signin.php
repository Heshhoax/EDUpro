<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<div>
<body>
<form action="includes/signinc.php" method="POST">
      <h1>Signin</h1>
      <div class="input-box">
        <input type="text" placeholder="First name" name="fname" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Last name" name="lname">
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Username" name="username" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Email" name="email" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password">
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Repeat Password" name="repeatpassword" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
  
      <button type="submit" class="btn" name="submit">SIGN UP</button>
   
      </div>
    </form>

    
</body>
</html>
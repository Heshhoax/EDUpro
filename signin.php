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
    
        <input type="text" placeholder="First name" name="fname" required><br>
        <input type="text" placeholder="Last name" name="lname"><br>
        <input type="text" placeholder="Username" name="username" required><br>
        <input type="text" placeholder="Email" name="email" required><br>
        <input type="password" placeholder="Password" name="password"><br>
        <input type="password" placeholder="Repeat Password" name="repeatpassword" required><br>
  
      <button type="submit" class="btn" name="submit">SIGN UP</button>

    </form>

    
</body>
</html>
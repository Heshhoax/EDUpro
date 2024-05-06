<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image:url('images/loginbackground.jpg');
        }
        .wrapper {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border-radius: 8px;
            background-color:rgba(255, 192, 203, 0.5);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .input-box {
            margin-bottom: 15px;
        }
        .input-box input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .remember-forgot {
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .remember-forgot label {
            margin-right: 10px;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .register-link {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <form action="includes/adminverify.php" method="POST">
        <h1>Admin Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Enter Username/Email" name="uid">
            </div>
            <div class="input-box">
                <input type="password" placeholder="Enter Password" name="password" id="password">
            </div>
            <input type="checkbox" id="showPassword"> <label for="showPassword">Show Password</label>
            <div class="remember-forgot">
                <label><input type="checkbox" id="remember">Remember Me</label>
                <a href="forgotpassword.php">Forgot Password</a>
            </div>
            <button type="submit" class="btn" name="submit">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="signin.php">Register</a></p>
            </div>
        </form>
    </div>
    <div id="content" style="align-items:center";>

</div>

    <!--js part for password reveling-->

    <script>
        const passwordInput = document.getElementById('password');
        const showPasswordCheckbox = document.getElementById('showPassword');

        showPasswordCheckbox.addEventListener('change', function() {
            if (this.checked) {
                passwordInput.type = 'text'; // Show password
            } else {
                passwordInput.type = 'password'; // Hide password
            }
        });

        //content div load

        document.querySelector('a[href="forgotpassword.php"]').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior

            // Fetch the content of the "forgotpassword.php" page
            fetch('forgotpassword.php')
                .then(response => response.text()) // Convert response to text
                .then(html => {
                    // Set the content of the "content" div to the fetched HTML
                    document.getElementById('content').innerHTML = html;
                })
                .catch(error => console.error('Error fetching forgot password page:', error));
        });
    </script>
    <?php
    if(isset($_POST['remember'])) {
    // Set cookie to remember the user's username or email
    $cookie_name = "remember_username_or_email";
    $cookie_value = $_POST['uid']; // Assuming 'uid' is the name of your input field
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 30 days expiration
        }
        ?>
</body>
</html>

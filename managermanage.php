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
            background-image: url('images/loginbackground.jpg');
        }

        .apper {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border-radius: 8px;
            background-color: rgba(245, 107, 252, 0.5);
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

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #800080;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: yellowgreen;
        }
    </style>
</head>

<body>
    
    <div class="apper">
        <form action="managerinc.php" method="POST">
            <h1>Manager</h1>

            <div class="input-box">
                <input type="text" placeholder="Enter Username" name="username">
            </div>

            <div class="input-box">
                <input type="password" placeholder="Enter Your Password" name="password" id="password">
            </div>
            <button type="submit" class="btn" name="submit">Add</button>
        </form>
    </div>
    
</body>

</html>
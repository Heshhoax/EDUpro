 <!DOCTYPE html>
 <html>
 <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Lecture Registration</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='mainstyle.css'>
    <!--<script src='main.js'></script>-->
 </head>
 <body>
    <?php include('heeader.php');?>
    <div class="log" id="side10">
        <h3>Lecture Registration Form</h3>
            <div id="side5">  
                <label>UserName :</label><input type="text" class="inp-reg" required><br><br>
                <label>Email :</label><input type="email" class="inp-reg" required><br><br>
                <label>First Name :</label><input type="text" class="inp-reg" required>
                <label>Last Name :</label><input type="text" class="inp-reg" required><br><br>
                <label>Enter N.I.C :</label><input type="text" class="inp-reg" required><br><br>
                <label>Password :</label><input type="password" class="inp-reg" required>
                <label>Confirmed Password :</label><input type="password" class="inp-reg" required><br><br>
                <label>Subjects :</label><input type="text" class="inp-reg" required><br><br>
                <label>Age :</label><input type="number" class="inp-reg" required>
                <label>D.O.B :</label><input type="date" class="inp-reg" required>
            </div>
            <input type="text" placeholder="Working Experiences" class="inp-area"><br>
        <button id="register">Register</button>
        <h5><center><a href="#">Privacy And Policy</center><a></h5>
    </div>
    <?php include('footer.php');?>
 </body>
 </html>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Course Upload</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='courseupload.css'>
</head>
<body>
    <form action="include.php" method="post">
        
        <div class="cour">
            <h1>Lecturer Materials Upload</h1>
            <div>
                <label class="la">Choose File to Upload:</label>
                <input type="file" id="file" name="file" accept=".pdf,.doc,.docx">
            </div>
            <div>
                <label class="la">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div>
                <label class="la">Description:</label><br>
                <textarea id="description" name="description" rows="'4" cols="50" required></textarea>
             </div>
            <div>
                 <button type="submit" id="sub" name="submit">Upload</button>
            </div>
        </div>     
    </form>
</body>
</html>
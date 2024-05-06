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
    <form action="" method="post">
        
        <div class="cour">
            <h1>Lecturer Materials Upload</h1>
            <div>
                <label id="la">Choose File to Upload:</label>
                <input type="file" id="file" name="file" accept=".pdf,.doc,.docx">
            </div>
            <div>
                <label id="la">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div>
                <label id="la">Description:</label><br>
                <textarea id="description" name="description" rows="'4" cols="50" required></textarea>
             </div>
            <div>
                 <input type="submit" value="Upload">
            </div>
        </div>     
    </form>
</body>
</html>
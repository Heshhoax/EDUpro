<?php
require'includes/database.php';
session_start(); 
$id=$_SESSION['ID']||$_SESSION['uid'];


// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["pp"]) && $_FILES["pp"]["error"] == 0) {
        // Define the directory where the uploaded files will be stored
        $target_dir = "images/pp";
        
        // Generate a unique filename for the uploaded file
        $target_file = $target_dir . basename($_FILES["pp"]["name"]);
        
        // Check if the file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
        } else {
            // Move the uploaded file to the designated folder
            if (move_uploaded_file($_FILES["pp"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars(basename($_FILES["pp"]["name"])). " has been uploaded.";
                
                // Store the file path in the database
                $filepath = $target_file;

                // Prepare and execute the SQL statement to insert the file path into the database
                $sql = "INSERT INTO  userdp(ID,pp) VALUES ('$id','$filepath')";
                if ($conn->query($sql) === TRUE) {
                    echo "File path inserted into the database successfully.";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                // Close the database connection
                $conn->close();
                
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "No file was uploaded.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload</title>
    <link rel="stylesheet" href=imageup.css>
</head>
<body>
    
    <form action="#" method="post" enctype="multipart/form-data">

        <input type="file" name="pp" placeholder="Add image">
        <button type="submit" name="submit">Upload</button>
    </form>
    
</body>
</html>



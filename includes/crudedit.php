<?php

require_once('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        h2 {
            text-align: center;
        }

        input[type="text"],
        input[type="email"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Ensures padding and border are included in element's total width and height */
        }

        input[type="submit"] {
            background-color: #4CAF50; /* Green */
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php
// Check if the ID parameter is set in the URL
if(isset($_GET['ID'])) {
    // Sanitize the ID parameter to prevent SQL injection
    $userID = $_GET['ID'];
    // Fetch the user information from the database
    $sql = "SELECT * FROM userinfo WHERE ID = '$userID'";
    $result = $conn->query($sql);
    
    if($result->num_rows == 1) {
        // Fetch the user data
        $userData = $result->fetch_assoc();
        
        // Display a form to edit the user information
        echo "<h2>Edit User</h2>";
        echo "<form action='updateuser.php' method='post'>";
        echo "<input type='hidden' name='userID' value='" . $userData['ID'] . "'>";
        echo "Username: <input type='text' name='username' value='" . $userData['username'] . "'><br>";
        echo "First Name: <input type='text' name='fname' value='" . $userData['fname'] . "'><br>";
        echo "Last Name: <input type='text' name='lname' value='" . $userData['lname'] . "'><br>";
        echo "Email: <input type='email' name='email' value='" . $userData['email'] . "'><br>";
        echo "<input type='submit' value='Update'>";
        echo "</form>";
    } else {
        echo "User not found";
    }
} else {
    echo "No user ID specified";
}

// Close the database connection
$conn->close();
?>
</body>
</html>

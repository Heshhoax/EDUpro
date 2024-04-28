<?php

require_once('database.php');
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


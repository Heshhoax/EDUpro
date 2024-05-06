<?php

require_once('database.php');
// Check if the ID parameter is set in the URL
if(isset($_GET['L_ID'])) {
    // Sanitize the ID parameter to prevent SQL injection
    $userID = $_GET['L_ID'];
    // Fetch the user information from the database
    $sql = "SELECT * FROM lecturerinfo WHERE L_ID = '$lecturerID'";
    $result = $conn->query($sql);
    
    if($result->num_rows == 1) {
        // Fetch the user data
        $userData = $result->fetch_assoc();
        
        // Display a form to edit the user information
        echo "<h2>Edit Lecturer </h2>";
        echo "<form action='updateuser.php' method='post'>";
        echo "<input type='hidden' name='userID' value='" . $lecturerrData['L_ID'] . "'>";
        echo "Username: <input type='text' name='username' value='" . $lecturerData['username'] . "'><br>";
        echo "First Name: <input type='text' name='fname' value='" . $lecturerData['fname'] . "'><br>";
        echo "Last Name: <input type='text' name='lname' value='" . $lecturerData['lname'] . "'><br>";
        echo "Email: <input type='email' name='email' value='" . $lecturerData['email'] . "'><br>";
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


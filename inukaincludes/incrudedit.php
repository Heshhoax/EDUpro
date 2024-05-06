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
        $lecturerData = $result->fetch_assoc();
        
        // Display a form to edit the user information
        echo "<h2>Edit Lecturer </h2>";
        echo "<form action='updatelecturer.php' method='post'>";
        echo "<input type='hidden' name='L_ID' value='" . $lecturerrData['L_ID'] . "'>";
        echo "Username: <input type='text' name='username' value='" . $lecturerData['username'] . "'><br>";
        echo "First Name: <input type='text' name='fname' value='" . $lecturerData['fname'] . "'><br>";
        echo "Last Name: <input type='text' name='lname' value='" . $lecturerData['lname'] . "'><br>";
        echo "Gender : <input type='text' name='gender' value='" . $lecturerData['gender'] . "'><br>";
        echo "Email: <input type='email' name='email' value='" . $lecturerData['email'] . "'><br>";
        echo "Mobile No: <input type='text' name='mobileno' value='" . $lecturerData['mobileno'] . "'><br>";
        echo "NIC: <input type='text' name='nic' value='" . $lecturerData['nic'] . "'><br>";
        echo "Password: <input type='text' name='password' value='" . $lecturerData['password'] . "'><br>";
        echo "Confirmed Password: <input type='text' name='confirmedpassword' value='" . $lecturerData['confirmedpassword'] . "'><br>";
        echo "Specialization: <input type='text' name='specialization' value='" . $lecturerData['specialization'] . "'><br>";
        echo "Subject: <input type='text' name='subject' value='" . $lecturerData['subject'] . "'><br>";
        echo "D.O.B: <input type='text' name='dob' value='" . $lecturerData['dob'] . "'><br>";
        echo "Experiences: <input type='text' name='Experiences' value='" . $lecturerData['Experiences'] . "'><br>";
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


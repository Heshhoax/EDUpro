<?php
require('database.php');

$code = $_POST['code'];

$sql = "SELECT * FROM admin WHERE secretcode='$code'";
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Fetch user data
    $userdata = $result->fetch_assoc();
    
    // Display the form with inline CSS styles
    echo "<div style='max-width: 400px; margin: 0 auto; background-color: #f2f2f2; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>";
    echo "<h2 style='font-family: Arial, sans-serif; color: #333; text-align: center;'>Edit User</h2>";
    echo "<form action='updateadmin.php' method='post'>";
    echo "<input type='hidden' name='id' value='".$userdata['ID']."'>";
    echo "<div style='margin-bottom: 15px;'>";
    echo "<label for='name' style='margin-bottom: 5px; display: block;'>Username:</label>";
    echo "<input type='text' name='name' value='".$userdata['username']."' style='width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;'>";
    echo "</div>";
    echo "<div style='margin-bottom: 15px;'>";
    echo "<label for='pass' style='margin-bottom: 5px; display: block;'>Password:</label>";
    echo "<input type='text' name='pass' value='".$userdata['password']."' style='width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;'>";
    echo "</div>";
    echo "<button type='submit' style='width: 100%; padding: 10px; background-color: #4caf50; color: #fff; border: none; border-radius: 5px; cursor: pointer;'>Update</button>";
    echo "</form>";
    echo "</div>";
} else {
    // Handle case where no user was found
    echo "<p>No user found for the provided email.</p>";
}
$conn->close();


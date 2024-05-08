<?php
require_once('database.php');

// Check if the 'id' parameter is set in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch lecturer record based on the ID
    $query = "SELECT * FROM lecturerinfo WHERE L_ID = $id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $gender = $row['gender'];
        $email = $row['email'];
        $mobileno = $row['mobileno'];
    } else {
        echo "Lecturer not found.";
        exit();
    }
} else {
    echo "ID parameter is missing.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lecturer</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Edit Lecturer</h2>
        <form action="update_lecturer.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo $username; ?>" required><br>

            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>" required><br>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" value="<?php echo $lname; ?>" required><br>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male" <?php if($gender == "male") echo "selected"; ?>>Male</option>
                <option value="female" <?php if($gender == "female") echo "selected"; ?>>Female</option>
            </select><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br>

            <label for="mobileno">Mobile No:</label>
            <input type="text" id="mobileno" name="mobileno" value="<?php echo $mobileno; ?>" required><br>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>

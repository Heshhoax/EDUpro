<?php
// Establish database connection
require'../../includes/database.phpdatabase.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create'])) {
    // Retrieve form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipCode = $_POST['zip_code'];

    // SQL query to insert data
    $sql = "INSERT INTO billingAddresses (fName, email, address, city, state, zipCode)
            VALUES ('$fullName', '$email', '$address', '$city', '$state', '$zipCode')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Read operation
$sql = "SELECT * FROM billing_addresses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Full Name: " . $row["full_name"]. " - Email: " . $row["email"]. " - Address: " . $row["address"]. "<br>";
    }
} else {
    echo "0 results";
}

// Update operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipCode = $_POST['zip_code'];

    // SQL query to update data
    $sql = "UPDATE billing_addresses SET 
            full_name='$fullName', email='$email', address='$address', city='$city', state='$state', zip_code='$zipCode' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Delete operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    // Retrieve id of the record to be deleted
    $id = $_POST['id'];

    // SQL query to delete data
    $sql = "DELETE FROM billing_addresses WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>

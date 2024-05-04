<?php

//create

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipCode = $_POST['zip_code'];

    // SQL query to insert data
    $sql = "INSERT INTO billing_addresses (full_name, email, address, city, state, zip_code)
            VALUES ('$fullName', '$email', '$address', '$city', '$state', '$zipCode')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

//Read

$sql = "SELECT * FROM billing_addresses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Full Name: " . $row["full_name"]. " - Email: " . $row["email"]. " - Address: " . $row["address"]. "<br>";
    }
} else {
    echo "0 results";
}

//Update

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST['id'];
    $fullName = $_POST['full_name'];
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


//Delete

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
?>
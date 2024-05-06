
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lecturer view</title>
<link rel="stylesheet" type="text/css" href="Inuka.css">
</head>
<body>
<a  class='btnblue' href="signlecturer.php" button>NEW</button></a>
<?php
// Display the table
echo "<table>
    <thead>
        <tr>
            <th>L_ID</th>
            <th>Username</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>NIC</th>
            <th>Password</th>
            <th>Confirmed Password</th>
            <th>Specialization</th>
            <th>Subject</th>
            <th>D.O.B</th>
            <th>Experience</th>
        </tr>
    </thead>
    <tbody>";
 
 require_once('inukaincludes/database.php');

 $sql="SELECT * FROM lecturerinfo ";
 $result=$conn->query($sql);

 if(!$result){
    die('invalid query');
 }

 while($row=$result->fetch_assoc()){
    echo "<tr>
    <td>{$row["L_ID"]}</td>
    <td>{$row["username"]}</td>
    <td>{$row["fname"]}</td>
    <td>{$row["lname"]}</td>
    <td>{$row["gender"]}</td>
    <td>{$row["email"]}</td>
    <td>{$row["mobileno"]}</td>
    <td>{$row["nic"]}</td>
    <td>{$row["password"]}</td>
    <td>{$row["confirmedpassword"]}</td>
    <td>{$row["specialization"]}</td>
    <td>{$row["subject"]}</td>
    <td>{$row["dob"]}</td>
    <td>{$row["Experiences"]}</td>
            <td>
            <a class='btn' href='inukaincludes/crudedit.php?ID={$row['ID']}'>Edit</a>
            <a class='btn btn-danger' href='inukaincludes/cruddel.php?ID={$row['ID']}'>Delete</a>
            </td>
        </tr>";
 }

?>

</body>
</html>

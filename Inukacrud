
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manager view</title>
<link rel="stylesheet" type="text/css" href="Inuka.css">
</head>
<body>
<a  class='btnblue' href="signlecturer.php" button>NEW</button></a>
<?php
// Display the table
echo "<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>";
 
 require_once('inukainclude/database.php');

 $sql="SELECT * FROM userinfo ";
 $result=$conn->query($sql);

 if(!$result){
    die('invalid query');
 }

 while($row=$result->fetch_assoc()){
    echo "<tr>
    <td>{$row["ID"]}</td>
    <td>{$row["username"]}</td>
    <td>{$row["fname"]}</td>
    <td>{$row["lname"]}</td>
    <td>{$row["email"]}</td>
            <td>
            <a class='btn' href='includes/crudedit.php?ID={$row['ID']}'>Edit</a>
            <a class='btn btn-danger' href='includes/cruddel.php?ID={$row['ID']}'>Delete</a>
            </td>
        </tr>";
 }

?>

</body>
</html>

<?php
require_once('database.php');

// Fetch all records from the lectureinfo table
$query = "SELECT * FROM lecturerinfo";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Lecturers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        td a {
            text-decoration: none;
            margin-right: 10px;
            color: #007bff;
        }

        td a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>All Lecturers</h2>
        <table>
            <tr>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>Action</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['username']}</td>";
                echo "<td>{$row['fname']}</td>";
                echo "<td>{$row['lname']}</td>";
                echo "<td>{$row['gender']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>{$row['mobileno']}</td>";
                echo "<td>";
                echo "<a href='incrudedit.php?id={$row['L_ID']}'>Edit</a> |";
                echo "<a href='delete.php?id={$row['L_ID']}' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

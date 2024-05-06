
<?php

require_once('database1.php');

$cid=$_GET['C_ID'];

$sql="SELECT * FROM course WHERE C_ID ='$cid'";

$result=$conn->query($sql);

$coursedata=$result->fetch_assoc();

echo "<h2>Edit Course Materials</h2>";
echo "<form action='updatecourse.php' method='post'>";
echo "<input type='int'  name='C_ID' value='".$coursedata['C_ID']."'>";
echo "<input type='text' name='Title' value='".$coursedata['Title']."'><br>";
echo "<input type='text' name='Description' value='".$coursedata['Description']."'><br>";
echo "<input type='file' name='Image' value='".$coursedata['Image']."'><br>";
echo "<button type='submit' name='submit'>submit</button>";
echo "</form>";

$conn->close();
<?php
echo"
<table>
<thead>
<tr>
<th>C_ID</th>
<th>Title</th>
<th>Description</th>
<th>Image</th>
</tr>
</thead>
</tbody>
";

require_once('database1.php');

$sql="SELECT * FROM course";
$result=$conn->query($sql);

if(!$result){
    die('connection error');
}
while($row=$result->fetch_assoc()){
  
    echo"
<tr>
<td>{$row['C_ID']}</td>
<td>{$row['Title'] }</td>
<td>{$row['Description']}</td>
<td>{$row['Image']}</td>
<td><a href='update.php?C_ID={$row['C_ID']}'>EDIT</a></td>
<td><a href='delete.php?C_ID={$row['C_ID']}'>DELETE</a></td>
</tr>
";
}
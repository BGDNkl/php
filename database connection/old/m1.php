<table>
<?php

$mysqli = mysqli_connect('localhost', 'root', 'mysql', 'baza1');

$sql = "select * from users";
$result = mysqli_query($mysqli, $sql);

while ($row = mysqli_fetch_array($result)) 
echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>delete</td></tr>";

?>
</table>

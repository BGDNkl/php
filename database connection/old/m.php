<?php

$mysqli = mysqli_connect('localhost', 'root', 'mysql', 'baza1');

$sql = "insert into users set name = 'user1' ";
mysqli_query($mysqli, $sql);
echo mysqli_error($mysqli);


$sql = "insert into users (name) values ('user3') ";
mysqli_query($mysqli, $sql);
echo mysqli_error($mysqli);

$sql = "select * from users";
$result = mysqli_query($mysqli, $sql);

//while ($row = mysql_fetch_assoc($result)) print_r($row);
while ($row = mysqli_fetch_row($result)) 
{
	print_r($row);
	echo "<br>";
}

//while ($row = mysqli_fetch_array($result))

?>

<table>
<?php

$mysqli = mysqli_connect('localhost', 'root', 'mysql', 'baza1');

$sql = "select * from users";
$result = mysqli_query($mysqli, $sql);

//echo "<tr><td>id<a href=\"?id=".$sort1."\">sort</a></td><td>name</td><td>action</td></tr>";

while ($row = mysqli_fetch_array($result))
{

	if($_GET)
	{	

		$id = $_GET['id'];
		$del = "delete from users where id = '".$id."'";
		$result_del = mysqli_query($mysqli, $del);

	}
//	if($sort1)
//	{	
	//	$sort1 = $_GET['id'];
		$sorting1 = "select * from users order by id, name desc";
		$result_sor1 = mysqli_query($mysqli, $sorting1);
//	}


	echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td><a href=?id=".$row['id'].">delete</a></td></tr>";

}
?>
</table>

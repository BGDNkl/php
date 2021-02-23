<?php

session_start();

if($_SESSION['zalogowany'] != 'OK')
{
	header('location: login_page.php');
}

if(array_key_exists('exit', $_POST))
{
	session_destroy();
	header('location: login_page.php');
}

$msql = mysqli_connect('localhost','root','mysql','baza1');

if(isset($_POST['name']) && !empty($_POST['name']) )
{
	$sql = "insert into users (name) values ('".$_POST['name']."')";
	mysqli_query($msql, $sql);
}

if(isset($_GET['id']))
{
	$sql = "delete from users where id=".$_GET['id'];
	mysqli_query($msql, $sql);
}

$sql = "select * from users";
$result = mysqli_query($msql, $sql);

if(isset($_GET['sort']))
{
	switch($_GET['sort'])
	{
		case 'idasc':
		$sql = "select * from users order by id asc";
		break;
		case 'iddesc':
		$sql = "select * from users order by id desc";
		break;
		case 'nameasc':
		$sql = "select * from users order by name asc";
		break;
		case 'namedesc':
		$sql = "select * from users order by name desc";
		break;
	}
	$result = mysqli_query($msql, $sql);
}
?>

<center>
<table border=2.3>
<tr>
	<th>id<a href="db_list.php?sort=iddesc">↓</a>
	<a href="db_list.php?sort=idasc">↑</a></th>
	<th>Name<a href="db_list.php?sort=namedesc">↓</a>
	<a href="db_list.php?sort=nameasc">↑</a></th>
	<th>Action</th>
<?php
while($row = mysqli_fetch_assoc($result))
{
	echo "<tr><td>".$row['id']."</td>";
	echo "<td>".$row['name']."</td>";
	echo '<td><a href="db_list.php?id='.$row['id'].'">delete</a></td></tr>';
}
print_r($row);

?>
</table>

<br>
<form method="post" action="db_list.php">
	<input type="text" name="name">
	<input type="submit" value="Add new user">
</form>
<br>
<form method="post">
	<input type="submit" name="exit" id="exit" value="exit"/>
</form>

</center>

<style>
table {
	width: 50%;
	font-size: 17px;
	text-align: left;
	border-collapse: collapse;
}

th {
	height: 50px;
	font-size: 16px;
	padding: 15px;
	text-align: center;
}

tr:hover {
	background-color: #f5f5f5;
} 

td {
	padding: 4.5px;
}
</style>


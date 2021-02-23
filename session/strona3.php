<?php

session_start();

if($_SESSION['zalogowany'] != 'OK')
{
	header('location: file1.php');
}

?>

<html>
<center>
<h1>Jestes na "Strona 3"</h1>
</center>
</html>


<html>
<style>
table { border: 1px solid black;
	border-collapse: collapse; }
a { font-size: 22px; }
th, td { 	border: 1px solid black;
		padding: 23px; }

</style>
<br>
<center>
<table>
<tr><td><a href="strona1.php">Strona 1</a></td></tr>
<tr><td><a href="strona2.php">Strona 2</a></td></tr>
<tr><td><a href="exit.php">Wyloguj</a></td></tr>
</table>
</html>


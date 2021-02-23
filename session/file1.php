<?php

session_start();

if (isset($_POST['login']) && isset($_POST['password']))
{
	$login = $_POST['login'];
	$password = $_POST['password'];
		
	if (($login=='user1') && ($password=='haslo1'))
	{
		$_SESSION['zalogowany']='OK';
		header('location: logged.php');
	}
	else
	{
		if ($login!='user1')
		{
			echo "<center>", "Nie ma takiego uzytkownika Sprobuj ponownie: ", "</center>", "<br>";
		}
		else //elsif ($password!='haslo1')
		{
			echo "<center>", "Niepoprawne haslo! Sprobuj ponownie: ", "</center>", "<br>";
		}
	}
}

?>

<html><body>
<form action="file1.php" method="post">
<center>Logowanie:<br><br>
<input type="text" name="login"><br>
<input type="text" name="password"><br><br>
<input type="submit" value="Wejdz">
</center>
</body></html>


<?php

session_start();

$mysqli = mysqli_connect('localhost', 'root', 'mysql', 'baza1');


if (isset($_POST['login']) && isset($_POST['password']))
{
	$login = $_POST['login'];
	$password = $_POST['password'];
	
	$sql_name_query = "select imie from users_table where imie = '$login'";
	$sql_name = mysqli_query($mysqli, $sql_name_query);

	if ($row = mysqli_fetch_array($sql_name))
	{
		if ($row['imie'] == $login)
		{	
			$sql_password_query = "select haslo from users_table where imie = '$login'";
			$sql_password = mysqli_query($mysqli, $sql_password_query);
			
			if ($row = mysqli_fetch_array($sql_password))
			{
				if ($row['haslo'] == $password)
				{
					echo "Jestes zalogowany";
				
					$_SESSION['zalogowany']='OK';
					header('location: db_list.php');
				}
				else
				{
					echo "Niepoprawne albo nie istniejace haslo";
				}
			}
			else
			{
				echo "Blad query password";
			}
		}
		else
		{
			echo "Niepoprawny albo nie istniejacy login"; 
		}
	}
	else
	{
		echo "Blad query login";
	}
}
//else
//{
//	echo "Wypelnij pola";
//}

?>

<html><body>
<form action="login_page.php" method="post">
<center>Logowanie:<br><br>
<input type="text" name="login"><br>
<input type="text" name="password"><br><br>
<input type="submit" value="Wejdz">
</center>
</body></html>

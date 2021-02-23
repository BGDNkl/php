<?php

session_start();
$a = $_SESSION["a"];
$b = $_SESSION["b"];
$c = $a + $b;

if(is_numeric($_POST['polet']))
{
	
	if($c == $_POST['polet'])
	{
		echo "Jestes zarejestrowany!";
	}
	else
	{
		echo "nie poprawna liczba";
	}
}
else
{	
		echo "Wpisuj cyfry!";
}


?>

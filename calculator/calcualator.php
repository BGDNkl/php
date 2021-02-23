<?php

if(is_numeric($_GET['polet1']))
{
	if(is_numeric($_GET['polet2']))
	{
		echo $_GET['polet1'], " + ", $_GET['polet2'], " = ",  $_GET['polet1']+ $_GET['polet2'];
	}
	else
	{
		echo $_GET['polet2'], " nie jest liczba!";
	}
}
else
{
	echo $_GET['polet1'], " nie jest liczba!";
}

?>





<?php

if( !empty( $_COOKIE["language"] ) ) 
	{ 
		if ($_COOKIE["language"] == 'fra')
		{
			echo "<center><h1>JVous ne semblez pas comprendre ce qui est écrit ici 3</h1></center>";	
			echo "<center>", "<h1>Je mappel Amour Toujour</h1>", "</center>";
		}
		elseif ($_COOKIE["language"] == 'pol')
		{
			echo "<center><h1>Jestes na \"Strona 1\"</h1></center>";
			echo "<center>", "<h1>Rozumiesz mnie</h1>", "</center>";
		}
		else
		{
			echo "<center><h1>You are on \"Page 1\"</h1></center>";					
			echo "<center>", "<h1>Englando right here</h1>", "</center>";
		}
	} 
?>

<html>
	<center>
		<a href="file1.php">go back</a>
	</center>
</html>

<style>
	a { font-size: 22px; }
</style>


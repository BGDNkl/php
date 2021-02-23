<form action="obrabotka.php" method="get">
<center>	
	<a href="obrabotka.php?lang_set=eng">English</a>
	<a href="obrabotka.php?lang_set=pol">Polish</a>
	<a href="obrabotka.php?lang_set=fra">Francais</a>
</form>

<h2>
	<?php 
	if( !empty( $_COOKIE["language"] ) ) 
	{ 
		if ($_COOKIE["language"] == 'pol')
		{
			echo "Wybrales [ ", $_COOKIE["language"]," ]"; 
		}
		elseif ($_COOKIE["language"] == 'fra')
		{
			echo "Tu as choisi [ ", $_COOKIE["language"]," ]"; 
		}
		else
		{
			echo "You chose [ ", $_COOKIE["language"]," ]"; 
		}
	} 
	else 
	{ 
		echo "<em>not set</em>"; 
	} 
	?>
</h2>

<table>
<tr><td><a href="page1.php">1</a></td></tr>
<tr><td><a href="page2.php">2</a></td></tr>
</table>
</center>

<style>
table { border: 1px solid black;
	border-collapse: collapse; }
a { font-size: 22px; }
th, td { 	border: 1px solid black;
		padding: 23px; }

</style>
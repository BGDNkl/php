<html>
<form action="baza.php" method="GET">

imie    	<input type=text name="imie"></br>
nazwisko	<input type=text name="nazwisko"></br>
pesel		<input type=text name="pesel"></br>
wiek		<input type=text name="wiek"></br>
plec		<input type=text name="plec"></br>
<input type=submit value="Dodaj">

</form>
</html>

<?php
	error_reporting(E_ALL ^ E_NOTICE);
	
	echo "<table border 1>";
	echo "<tr>
	<td><button><a href='baza.php?sortuj=1'>sort</a></button></td> 
	<td><button>sort</button></td> 
	<td><button>sortuj</button></td>        
	<td><button>sort</button></td>     
	<td><button>sort</button></td>     
	<td></td></tr>";
	
	$mysqli = mysqli_connect('localhost','root','mysql','baza1');
	
	if($_GET['stan']==1 && isset($_GET['pesell']))
	{
		$poczatek="delete from users_table_2 where pesel=";
		$srodek=$_GET['pesell'];
		$koniec=";";
		$poczatek.=$srodek;
		$poczatek.=$koniec;
		echo $poczatek;
		mysqli_query($mysqli,$poczatek);
	}
	
	$imie = $_GET['imie'];
	$nazwisko = $_GET['nazwisko'];
	$pesel = $_GET['pesel'];
	$wiek = $_GET['wiek'];
	$plec = $_GET['plec'];
	$queryy = "INSERT INTO users_table_2 VALUES (".$imie.",".$nazwisko.",".$pesel.",".$wiek.",".$plec.")";
	
	//echo $queryy;
	
	mysqli_query($mysqli,$queryy);
	
	if($_GET['sortuj']==1)
	{
		$result=mysqli_query($mysqli,"select * from users_table_2 order by imie");
		echo "tak";
	}	
	else
	{
		$result=mysqli_query($mysqli,"select * from users_table_2");
	}
	
	while($row = mysqli_fetch_array($result))
	{
		
		echo "<tr><td>{$row['imie']}</td>
			<td>{$row['nazwisko']}</td>
			<td>{$row['pesel']}</td>
			<td>{$row['wiek']}</td>
			<td>{$row['plec']}</td><td>
			<a href='baza.php?pesell={$row['pesel']}&stan=1'>
			delete </a></td</tr>";
	}	
	
echo "</table>";
?>

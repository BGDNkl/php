<!--
<?php
if($_GET) echo "{$_GET['x']} {$_GET['y']}", "<br>";
?>
-->

<style>
table {	border-collapse: collapse;
	border:2px solid #333;
}
.a {background-color: black;}
.a a {color: black;}
.b {background-color: white;}
.b a {	color: white;}
td {	width: 60px;
	height: 60px;
	text-align: center;
	vertical-align: middle;}
.c {background-color: red;}
.c a {	color: red; 
	font-weight: bold;
	width: 60px;
	height: 60px; 
	font-size: 30px;}
img {border: none;}
.nol {size: x-large};
</style>

<?php
$x = 8;
$y = 8;

for ($i = 1; $i <= $x; $i += 1)
{
	echo "<table>";
	
	for ($j = 1; $j <= $x; $j += 1)
	{
		if($i %2 == 0)
		{
			if($_GET)
			{		
				if($i == $_GET['x'] && $j == $_GET['y'])
				{
					echo "<td class=\"c\">", "<a class=\"nol\" href=\"?x=$i&y=$j\">", "0", "</a>", "</td>";
					$j += 1;
				}
			}
			
			if($j %2 == 0)
			{
				echo "<td class=\"a\">", "<a class=\"nol\" href=\"?x=$i&y=$j\">", "0", "</a>", "</td>";
			}
			else if($j %2 != 0 )
			{
				echo "<td class=\"b\">", "<a class=\"nol\" href=\"?x=$i&y=$j\">", "0", "</a>", "</td>";
			}
		}
		else if ($i % 2 != 0)
		{
			if($_GET)
			{		
				if($i == $_GET['x'] && $j == $_GET['y'])
				{
					echo "<td class=\"c\">", "<a class=\"nol\" href=\"?x=$i&y=$j\">", "0", "</a>", "</td>";
					$j += 1;
				}
			}
			
			if($j %2 != 0)
			{
				echo "<td class=\"a\">", "<a class=\"nol\" href=\"?x=$i&y=$j\">", "0", "</a>", "</td>";
			}
			else if($j %2 == 0)
			{
				echo "<td class=\"b\">", "<a class=\"nol\" href=\"?x=$i&y=$j\">", "0", "</a>", "</td>";
			}
		}
	}
	echo "</table>";
}
?>


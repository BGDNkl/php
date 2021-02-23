<?php
$lang = array('en','pl','fr');
if(isset($_GET['l']))
{
	if(in_array($_GET['l'],$lang))
	{
		setcookie('lang',$_GET['l'],time()+3600);
		header('location:ciachl.php');
	}
}
if(isset($_COOKIE['lang']))
{
	?>
	wybierz opcje jezykowa:
	<a href="?l=en">eng</a>
	<a href="?l=pl">pol</a>
	<a href="?l=fr">fra</a>
	<?php
}
else
{
	$fil = $_COOKIE['lang'];
	if(@$_GET['id'])
	{
	$page = "$fil{$_GET['id']}.php"; include $page;
	}
	else include "$fil.php";
	?>
	<br>
	<a href="?id=1">1</a>
	<br>
	<a href="?id=2">2</a>
	<br>
	<a href="?id=en">eng</a>
	<a href="?id=pl">pol</a>
	<a href="?id=fr">fra</a>
	<?php
	
	
	?>
}

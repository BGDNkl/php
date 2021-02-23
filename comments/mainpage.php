<?php

$path = "upload/gb.dat";
if (isset($_POST['username']) && isset($_POST['comment']))
//if(@$_POST)
{
	$u = $_POST['username'];
	$c = $_POST['comment'];
	$message = "<table><tr><td>".$u."</td></tr><tr><td>".$c."</td></tr></table>\n";
	$fp = fopen($path, "a+");
	fwrite ($fp, $message);
	fclose ($fp);
}
if(file_exists($path)) include($path);
?>

<form action="" method="POST">
User:
<br>
<input type="text" name="username">
<br>
Comment:
<br>
<textarea name="comment"></textarea>
<br><br>
<input type="submit" value="Sumbit Query">




<?php
if (isset($_FILES['upload']))
{
	print_r($_FILES);
	echo "<br><br>";
	//exit();

	$uploadfile = $_FILES['upload']['tmp_name'];
	echo 'zaladowales plik o tmpn: '.$uploadfile;
	echo "<br>";
	
	$uploadtype = $_FILES['upload']['type'];
	echo 'zaladowales plik typu: '.$uploadtype;
	$file = 'upload/'.$_FILES['upload']['name'];
	
	echo "<br>";
	echo 'i rzucasz: '.$file;
	move_uploaded_file($uploadfile, $file);
}
?>

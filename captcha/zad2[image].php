<?php
session_start();

$img = imagecreatetruecolor(100,38);			// rozmiar okienka
$blue = imagecolorallocate($img,0,0,200);		// kolor tla
$white = imagecolorallocate($img,255,255,255);		// color symboli
imagefill($img,0,0,$blue);


$_SESSION["a"] = rand(1, 9);
$_SESSION["b"] = rand(1, 9);
//	$a = $_SESSION["a"] ;
//	$b = $_SESSION["b"] ;

//	imagestring($img,10,4,10,"$a  +  $b  = ",$white);
imagestring($img,10,4,10,''.$_SESSION["a"].'   +  '.$_SESSION["b"].'  = "',$white);
header("content-type: image/png");
imagepng($img);
?>

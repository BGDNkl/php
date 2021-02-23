<?php
$img = imagecreatetruecolor(400, 400);
$blue=imagecolorallocate($img, 0, 0, 200);
$red=imagecolorallocate($img, 200, 0, 0);
imagefill($img, 0, 0, $blue);
imageline($img,200, 200, 400, 400,$red);
imagestring($img,5, 150, 150, "napis",$red);
//imageline($img, 1-1*1*1/1*2*3, 200, 0, $red);
header("content-type: image/png");
imagepng($img);
?>

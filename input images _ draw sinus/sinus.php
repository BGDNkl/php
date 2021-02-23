<?php 
$im = imageCreateTrueColor(800, 450);
$c = ImageColorAllocate($im, 255, 255, 255);
$c2 = ImageColorAllocate($im, 0, 255, 255);
imageline($im, 0, 200, 800, 200, $c); 
imageline($im, 100, 0, 100, 800, $c);

for ($x = 0; $x < (4*3.14); $x += 0.01) 
{
	$y = -sin($x);		
	$x2 = $x*50;	// rozciągnąć poziomo	
	$y2 = $y*50;	// rozciągnąć pionowo	
	
	// początek rysowania osi - z początku układu współrzędnych (x = 100; y = 200)
	imageline($im, $x2+100, $y2+200, $x2+100.01, $y2+200.01, $c2);	
}
	
header("Content-type:image/png");
imagePng($im);
imageDestroy($im);
?>
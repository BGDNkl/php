<?php 
$im = imageCreateTrueColor(800, 400);
$c = ImageColorAllocate($im, 255 , 255, 255);
$c2 = ImageColorAllocate($im, 0 , 255, 255);
imageline($im, 0, 200, 800, 200, $c);
imageline($im, 100, 0, 100, 800, $c);

$y = 0;
for ($x = 0; $x < (4*3.14); $x += 0.01) 
{
	$y = -cos($x);		// "+" -> y=-1
	//$y = round($y,4);
	$x2 = $x*50;		// esli uvelichivaem, to rastyagivaem po x
	$y2 = $y*50;		// esli uvelichivaem, to rastyagivaem po y
	
	// begin to drag grapfic not from the x=0, but with 100 to the right etc
	imageline($im, $x2+100, $y2+200, $x2+100.01, $y2+200.01, $c2);	
	
}
	
header("Content-type:image/png");
imagePng($im);
imageDestroy($im);
?>

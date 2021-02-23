<!doctype html>
 
<html lang="en">
 
<head>
    <style>
        .contener {
		height: 816px;
		width: 816px;
		border-style: solid;
		border-width: 1px;
        }
 
        .white {
		height: 100px;
		width: 100px;
		background: white;
		float: left;
		border-style: solid;
		border-width: 1px;
		border-color: black;
        }
 
        .black {
		height: 100px;
		width: 100px;
		background: black;
		float: left;
		border-style: solid;
		border-width: 1px;
		border-color: black;
        }
        .red{
		height: 100px;
		width: 100px;
		background: red;
		float: left;
		border-style: solid;
		border-width: 1px;
		border-color: black;
		text-align: center;
		font-size: 11px;
        }
        .hetman{
		height: 100px;
		width: 100px;
		background: red;
		float: left;
		color: white;
		text-align: center;
		border-style: solid;
		border-width: 1px;
		border-color: white;
        }	
    </style>
 
</head>
<body>
 
<?php
$hetmanX = 0;
$hetmanY = 0;
 
if(isset($_GET['x']))
{
    $hetmanX = $_GET['x'];
    $hetmanY = $_GET['y'];
}
 
?>
 
<div class="contener">
    <?php
    for($i = 0; $i<8; $i++)
    for($j = 0; $j<8; $j++)
    {
        if($i==$hetmanX && $j==$hetmanY)
            echo '<a href="index.php?x='.$i.'&y='.$j.'"><div class="hetman"><h1>H</h1></div></a>';
        else if($i <= $hetmanX+1 && $i >= $hetmanX-1 && $j <= $hetmanY+1 && $j >= $hetmanY-1)
        echo '<a href="index.php?x='.$i.'&y='.$j.'"><div class="red"><h1>UNO</h1></div></a>';
        else if(($i < $hetmanX+1 && $i > $hetmanX-1) || ($j < $hetmanY+1 && $j > $hetmanY-1))
        echo '<a href="index.php?x='.$i.'&y='.$j.'"><div class="red"><h1>dos</h1></div></a>';
        else if($i-$hetmanX==$j-$hetmanY)
        echo '<a href="index.php?x='.$i.'&y='.$j.'"><div class="red"><h1>i-h.x<br>==<br>j-h.y</h1></div></a>';
        else if($i+$j==$hetmanX+$hetmanY)
        echo '<a href="index.php?x='.$i.'&y='.$j.'"><div class="red"><h1>i+j<br>==<br>hx+hy</h1></div></a>';
        else if(($i+$j)%2==0)
            echo '<a href="index.php?x='.$i.'&y='.$j.'"><div class="black"></div></a>';
        else
            echo '<a href="index.php?x='.$i.'&y='.$j.'"><div class="white"></div></a>';
    }
    ?>
</div>
</body>

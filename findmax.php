<?php

$a=$_GET['num1'];
$b=$_GET['num2'];
$c=$_GET['num3'];
$d=-50000000;

if($a>$b)
$d=$a;
else
$d=$b;
if($d<$c)
$d=$c;
echo $d;



?>
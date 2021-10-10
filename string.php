<?php

$a=$_GET['num1'];
echo "The length of the string is ".strlen($a);
$b="";
for($c=strlen($a)-1;$c>=0;$c--){
    $b=$b.$a[$c];
}
echo "<br/>The revresal of the string is ".$b;


?>
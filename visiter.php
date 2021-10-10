<?php
session_start();
if(!file_exists("counter.txt")){
    $f=fopen("counter.txt",'w');
    fwrite($f,"0");
    fclose($f);
}

$f=fopen("counter.txt","r");
$x=fread($f,filesize("counter.txt"));
fclose($f);

if(!isset($_SESSION['hasvisited'])){
    $_SESSION['hasvisited']="yes";
    $x++;
    $f=fopen("counter.txt",'w');
    fwrite($f,$x);
    fclose($f);

}

echo "There is total of ".$x." visiters";

?>
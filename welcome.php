<?php

session_start();
if(!isset($_SESSION["uname"])){
    echo "<script type='text/javascript'>location.href = 'login.php';</script>";
}else{
    echo "<h1>Welcome as user name ".$_SESSION['uname']."</h1>";
    echo "<h1>And password ".$_SESSION['pass']."</h1>";
}

?>

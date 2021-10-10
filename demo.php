<?php

if(isset($_COOKIE["Name"])){
    echo "<h1>My name is ".$_COOKIE["Name"]."</h1>";
    echo "<h1>My fav game is ".$_COOKIE["fav_game"]."</h1>"; 
}

?>
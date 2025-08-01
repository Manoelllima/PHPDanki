<?php


function AutoLoad($class){
    if(file_exists("08.AutoLoad/class/".$class.".php")){
        include("08.AutoLoad/class/".$class.".php");
    }
}

spl_autoload_register("AutoLoad");


$pessoa = new teste();
?>

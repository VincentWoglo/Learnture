<?php
spl_autoload_register("myAutoLoader");

function myAutoLoader($className){
    $path = "../Model/";
    $extension = ".php";
    $fullpath = $path . $className . $extension;
    include_once $fullpath;
}

include_once("./Components/Login/login__input.php");
?>
<?php
error_reporting(0);
session_start();
spl_autoload_register("myAutoLoader");

function myAutoLoader($className){
    $path = "../Model/";
    $extension = ".php";
    $fullpath = $path . $className . $extension;
    include_once $fullpath;
}


$Login = new Login();
$Login -> Signin();


if($_SESSION['active_user']){
    header('Location: https://'.$_SERVER['HTTP_HOST']. '/Learnture/Source/cms/View/index.php');
}

include_once("./Components/Login/login__input.php");
?>
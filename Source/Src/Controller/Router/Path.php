<?php


    $Router = new Router;
    $Path = trim($_SERVER["PATH_INFO"], "/");
    if($Path === ""){
        $Path = "/";
    }
    var_dump($Path);



    $Router->View("/", function(){
        return "Home Page";
    });
    $Router->View("/Articles", function(){
        return "Articles";
    });
    var_dump($Path);
    $Router->Dispatch($Path);
?>
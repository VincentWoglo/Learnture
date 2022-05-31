
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
    
        $Logout = new Login();
        $Logout->Signout();
        include_once("./Components/Header.php");
        $Articles = new Articles();
        $Articles->storeArticle();
        $Articles->deleteArticle();
        if(!$_SESSION['active_user']){
            header('Location: https://'.$_SERVER['HTTP_HOST']. '/Learnture/source/cms/View/Login.php');
        }
        //MAIN CONTAINER
        include_once("./Components/NewArticle.php");
        include_once("./Components/AnalyticsPanel.php");
        include_once("./Components/ArticlesPanel.php");
        //BEFORE FOOTER
        include_once("./JSInc.php");
    ?>

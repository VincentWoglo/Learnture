
<?php
    error_reporting(0);
    include_once("./Components/Header.php");
    spl_autoload_register("myAutoLoader");

    function myAutoLoader($className){
        $path = "../Model/";
        $extension = ".php";
        $fullpath = $path . $className . $extension;
        include_once $fullpath;
    }
        $Articles = new Articles();
        $Articles->storeArticle();
        $Articles->deleteArticle();

        //MAIN CONTAINER
        include_once("./Components/NewArticle.php");
        include_once("./Components/AnalyticsPanel.php");
        include_once("./Components/ArticlesPanel.php");
        //BEFORE FOOTER
        include_once("./JSInc.php");
    ?>

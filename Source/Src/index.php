<?php
    //include_once("./Controller/Router/Router.php");
    //include("./Controller/Router/Path.php");require_once('./Libraries/vendor/autoload.php');
//include_once('./Controller/MergeSort.php');
require('../vendor/autoload.php');
use Src\Controller\Cache;
use Src\Controller\RecentlySearched;
    //include("./Controller/Cache.php");
    $Cache = new Cache();
    $Function = $Cache->RecentlyVisited();
    $loader = new \Twig\Loader\FilesystemLoader('./Views');
    $twig = new \Twig\Environment($loader);

    echo $twig->render('index.html.twig', [
        'test' => $Function
    ]);

    $RecentlySearch = new RecentlySearched();
    $RecentlySearch->HomeRecentlySearched();
?>

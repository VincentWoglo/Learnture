<?php

//pSR-4 autoload
require('../vendor/autoload.php');
//Queue class autoload
require_once('./Libraries/vendor/autoload.php');

use Src\Controller\GetBrowser;
use BackEnd\Model\Connection;
use BackEnd\Model\Articles;
use Src\Controller\OrganizeArray;
use Src\Controller\BiggestScore;
use Src\Controller\Pagination;
error_reporting(1);
session_start();
//Get browser client
$GetBrowser = new GetBrowser();
$GetBrowser->GetBrowserClient();
//$GetBrowser->GetBrowserLang();


$SearchQuery = $_REQUEST['search__input'];
$Article = new Articles();
$QueryResults = $Article->getArticle($SearchQuery);

if(count($QueryResults) === 0){
    echo "No results for: ".$SearchQuery;
    echo "<input type='button' value='Request Tutorial'>";

    //tell user there are no results for the query
    //give user prompt to request a tutorial
}
else{
$OrganizeArray = new OrganizeArray;
$ArrayOrganized = $OrganizeArray->ArrayOrganized($QueryResults);
//Getting the biggest score
$BiggestScore = new BiggestScore;
$BiggestScore->GetBiggestScore($ArrayOrganized);
//Splitting the array into 2 and sorting the arrays with Merge Sort
function MergeSort($Array){
    if(count($Array) === 1) return $Array;
    //Get the middle of the array
    $MiddleArrayNumber = floor(count($Array)/2);

    $LeftArray = array_slice($Array, 0, $MiddleArrayNumber);
    $RightArray = array_slice($Array, $MiddleArrayNumber);
    return Merge(MergeSort($LeftArray), MergeSort($RightArray));
}

function Merge($LeftArray, $RightArray){
    $ResultArray = [];
    $LeftIncrement = 0;
    $RightIncrement = 0;

    while($LeftIncrement<count($LeftArray) && $RightIncrement<count($RightArray)){
        if($LeftArray[$LeftIncrement]<$RightArray[$RightIncrement]){
            array_push($ResultArray, $LeftArray[$LeftIncrement]);
            $LeftIncrement++;
        }else{
            array_push($ResultArray, $RightArray[$RightIncrement]);
            $RightIncrement++;
        }
    }

    return [...$ResultArray, ...array_slice($LeftArray, $LeftIncrement), ...array_slice($RightArray, $RightIncrement)]; 
}
//Sorting the score with MergeSort
$hg = array_reverse(MergeSort(array_column($ArrayOrganized, "score")));
        //Pagination
$Pagination = new Pagination;
//Storing orders score into Queue
$ArrayQueue = $Pagination->PageIntoQueue($ArrayOrganized, $hg);
//displaying the pagination
$Pagination->Page($ArrayQueue, $_GET['page'], 2);
}


//Sending Files To Search View
//Display items in the Queue
$DisplayResults = $Pagination->DisplayQueue($ArrayQueue);
$loader = new \Twig\Loader\FilesystemLoader('./Views');
$twig = new \Twig\Environment($loader);
echo $twig->render('Search.html', [
    'DisplayResults' => $DisplayResults
]);
?>
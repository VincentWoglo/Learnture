<?php
    class RecentlySearch{
        function HomeRecentlySearched(){
            //Get time the user searched the query
            //Create session to tack if the user have visited the url
            header('Location: https://'.$_SERVER['HTTP_HOST']. '/Learnture/source/cms/View/index.php');
            
            $Site = "https://".$_SERVER['HTTP_HOST']."/ProjectX/Source/Src/Search.php";
            $Visited = FALSE;
            $NumberVisited = 0;
            if($_SESSION["HomeRecentlySearched"] === $Site){
                $NumberVisited++;
                $Visited = TRUE;
            }

        }
    }
?>
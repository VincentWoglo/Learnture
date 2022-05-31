<?php
    namespace Src\Controller;
    class RecentlySearched{
        function HomeRecentlySearched(){
            //Recommendation algorithm
            //Stack data structure ( Last in first out to 
            //display the most recent search first)

            https://codeutopia.net/blog/2008/03/07/tracking-the-users-browsing-history-with-php/

            //Get time the user searched the query
            //Create session to tack if the user have visited the url
            //header('Location: https://'.$_SERVER['HTTP_HOST']. '/Learnture/source/cms/View/index.php');
            
            //$Site = "https://".$_SERVER['HTTP_HOST']."/ProjectX/Source/Src/Search.php";
            //$Visited = FALSE;
            //$NumberVisited = 0;
            //if($_SESSION["HomeRecentlySearched"] === $Site){
            //    $NumberVisited++;
            //    $Visited = TRUE;
            //}


            //echo URI and check the uri to see if the user visited a page
            $Str = $_SERVER['REQUEST_URI'];
            $Pattern = "/Article.php?Read=/i";
            echo preg_match($Pattern, $Str);
            //echo $_SERVER['REQUEST_URI'];
            //echo "<br />";

        }


        function OnClick(){

        }
        //When the user click an article link, activate a session
        //to store information about the article and time clicked

        
    }
?>
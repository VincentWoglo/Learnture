<?php
namespace Src\Controller;
    class BiggestScore{
        function GetBiggestScore($ArrayOrganized){
            $CurrentScore = 0;
            for($i = 0; $i<=count($ArrayOrganized); $i++){
                //var_dump($ArrayOrganized[$i]["score"]);
                $ScoreToCompare = $ArrayOrganized[$i]["score"];
                if($CurrentScore<$ScoreToCompare){
                    return $CurrentScore=$ScoreToCompare;
                }
            }
        }
    }
?>
<?php
    class MergeSort
    {
        
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
    
    }
?>
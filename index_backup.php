<?php
include "simple_html_dom.php";
    $url = "https://www.w3schools.com/php/php_regex.asp";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($curl);
    curl_close($curl);
    $dom = new simple_html_dom();
    $dom->load($response);
    $h = $dom->find('body');
    foreach($h as $a){
        $results = $a->plaintext;
    }
    //if full query searched was found in the document
    $query = "Returns 1 if the pattern was found in the string and 0 if not";
    $preg_ = preg_match_all("/$query/iu", $results);
    $t = $preg_*4;
    echo "query: ".$preg_*4;
    echo "<br />";

    
    //if keywords have been found in the document
    $explode = explode(" ", $query);
    $a = array();
    foreach($explode as $l){
        $preg = preg_match_all("/$l/iu", $results);
        $a[] = $preg *2;
        $score = $preg *2;
        echo "keywords: ".$score;
        echo "<br />";
    }

    //take total score of the keyword's score and the query's
    $s = array_sum($a);
    echo $s+$t;

?>
<<?php
    class Articles extends Connection
    {
        
        function __contruct(){

        }

        
        function readArticle(){
                $conn = $this->connect();
                $fetch = $conn->query("SELECT * FROM articles ORDER BY RAND() LIMIT 4");
                $data = $fetch->fetchAll();
                return $data;
        }
    }
    
?>
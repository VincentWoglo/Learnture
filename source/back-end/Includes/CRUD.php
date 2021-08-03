<?php
    class CRUD{
        protect function insert(){
            $query = $pdo->query("SELECT * FROM articles");
        }
    }
?>
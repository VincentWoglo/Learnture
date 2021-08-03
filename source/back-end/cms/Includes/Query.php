<?php
include("../../Includes/db__conn.php");
    class insert {
        function __constructor(){
            
        }
        protected function insert__db(){
            $name = 'Macmillan';
            $sql = 'INSERT INTO publishers(name) VALUES(:name)';

            $statement = $pdo->prepare($sql);

            $statement->execute([':name' => $name
]);

        }
    }
?>
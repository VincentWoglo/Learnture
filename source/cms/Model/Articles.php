<?php
    class Articles extends Connection
    {
        
        function __contruct(){

        }

        
        function readArticle(){
            $conn = $this->connect();
            $fetch = $conn->query("SELECT * FROM articles ORDER BY id");
            $data = $fetch->fetchAll();
            return $data;
        }


        function storeArticle(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $conn = $this->connect();
                $title = $_REQUEST['article__name__input'];
                $description = $_REQUEST['article__description'];
                $category = $_REQUEST['article__category'];
                $body__text = $_REQUEST['text__editor'];
                $date = date_default_timezone_set('UTC');
                //$written_by = $_REQUEST['body__text'];

                $data = [
                    'title'=>$title, 'description'=>$description, 'category'=>$category,
                    'body_text'=>$body__text,'date'=>$date,
                ];
                $insert = 'INSERT INTO articles (title, description, category, body_text, date)
                VALUES (:title, :description, :category, :body_text, :date)';
                $execute = $conn->prepare($insert);
                $done = $execute->execute($data);

                // if($done){
                //     exit();
                // }
             }//else{
            //     echo "There was a problem inserting your data";
            // }
        }

    }
    
?>
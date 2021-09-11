<?php
    require_once("InputValidation.php");


    class Articles extends Connection
    {
        
        function __contruct(){

        }

        
        function readArticle(){
                $conn = $this->connect();
                $fetch = $conn->query("SELECT * FROM articles ORDER BY id");
                $data = $fetch->fetchAll();
                return $data;
                $this->connection->close();
        }


        function storeArticle(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $Validate = new InputValidation();
                $conn = $this->connect();
                
                $cover_img = $Validate->Validate($_REQUEST['cover_img']);
                $title = $Validate->Validate($_REQUEST['article__name__input']);
                $description = $Validate->Validate($_REQUEST['article__description']);
                $category = $Validate->Validate($_REQUEST['article__category']);
                $body__text = $Validate->Validate($_REQUEST['text__editor']);
                $date = date_default_timezone_set('UTC');

                //img__upload
                $location_img = "../Img_uploads/";
                $target_img = $_FILES['cover_img']['name'];
                $tmp_img = $_FILES['cover_img']['tmp_name'];
                move_uploaded_file($tmp_img, $location_img.$target_img);


                //var_dump($cover_img);
                //add written by

                $data = ['cover_img'=>$cover_img,
                    'title'=>$title, 'description'=>$description, 'category'=>$category,
                    'body_text'=>$body__text,'date'=>$date,
                ];
                $insert = 'INSERT INTO articles (cover_img, title, description, category, body_text, date)
                VALUES (:cover_img, :title, :description, :category, :body_text, :date)';
                $execute = $conn->prepare($insert);
                $done = $execute->execute($data);
             }
        }

        function deleteArticle(){
                $Validate = new InputValidation();
                $conn = $this->connect();
                    $delete__btn = $_GET['delete__btn'];

                    if($_SERVER['REQUEST_METHOD'] == 'GET'){
                    if(isset($delete__btn)){
                        $id = $_GET['card__id'];
                        $delete= "DELETE FROM articles WHERE id=:id";
                        $execute = $conn->prepare($delete);
                        $done = $execute->execute(['id'=>$id]);
                        // header('Location: http://www.example.com/another-page.php', true, 301);
                        // exit();
                        if($done){
                            echo "jdnfjndf";
                        //close the database connection at the end
                        //redirect once database connection is closed
                        }
                    }
                }
                    
        }
    }
    
?>
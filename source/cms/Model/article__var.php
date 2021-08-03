<?php

//include_once("db__conn.php");
class ArticleVar extends Connection
{
        public $Id;
        public $title;
        public $description;
        public $category;
        public $body__text;
        public $date;
        public $written_by;


        function __construct(){
                $this->id = $id;
                $this->title = $title;
                $this->description = $description;
                $this->category = $category;
                $this->body__text = $body__text;
                $this->date = $date;
                $this->written__by = $written_by;
            }
}

?>
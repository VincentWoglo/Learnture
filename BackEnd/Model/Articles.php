<?php
namespace BackEnd\Model;
use BackEnd\Model\Connection;
class Articles extends Connection
{
    function __construct()
    {

    }

    function getArticle($query)
    {
        $Connection = $this->Connect();
        $query = str_replace(" ", "|", $query);
        $fetch = $Connection->query("SELECT * FROM articles 
        WHERE title REGEXP '".$query."' OR body_text REGEXP '".$query."' ");
        $data = $fetch->fetchAll();
        return $data;
        $Connection->close();
    }
    
}
?>
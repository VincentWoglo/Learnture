<?php
class Connection{
    private $host =  "localhost";
    private $password = "";
    private $username = "root";


    function __contruct(){
        $this->db__name = $db__name;
        $this->host = $host;
        $this->password = $password;
        $this->username = $username;
    }


    function connect()
    {
    try {
        $conn = new PDO("mysql:host=$this->host;dbname=Learnture", $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $error) {
       echo "Please check you connection" .$error->getMessage();
    }
    }
}
?>
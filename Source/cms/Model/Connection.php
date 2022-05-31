<?php
class Connection{
    private $host =  "localhost";
    private $password = "";
    private $username = "root";
    protected $conn;


    function __contruct(){
        $this->db__name;
        $this->host;
        $this->password;
        $this->username;
        $this->conn;
    }


    function connect()
    {
    try {
        $this->conn = new PDO("mysql:host=$this->host;dbname=learnture", $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->conn;
    } catch (PDOException $error) {
       echo "Please check you connection" .$error->getMessage();
    }
    }
}
?>
<?php
$host =  "localhost";
$password = "";
$username = "root";
try {
    $conn = new PDO("mysql:host=$host;dbname=Learnture", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
} catch (PDOException $error) {
   echo "Please check you connection" .$error->getMessage();
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = $_REQUEST['search__input'];
}
echo "sjd";
?>
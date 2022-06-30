<?php
session_start();

$servername = "localhost";
$username = "";
$password = "";
$dbname = "billboard";

try{
    $db_host= new PDO(
        "mysql:host={$servername}; dbname={$dbname};charset=utf8",
        $username, $password
    );
}catch (PDOException $e){
    echo "資料庫連結失敗<br>";
    echo "Error: ".$e->getMessage(). "<br>";
    exit;
}
?>

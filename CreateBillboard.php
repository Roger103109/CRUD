<?php
require_once "db_connect.php";
$sql="INSERT INTO List (Content, Date) VALUES (?,?)";
$stmt=$db_host->prepare($sql);

$Content=$_POST["Content"];
$Date=$_POST["Date"];

try{
    $stmt->execute([$Content, $Date]);
    echo "資料新增完成";

}catch(PDOException $e){
    echo "資料庫新增失敗<br>";
    echo "Error: ".$e->getMessage(). "<br>";
    exit;
}

header('location: BillboardList.php');
?>
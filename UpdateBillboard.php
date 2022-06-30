<?php
require_once "db_connect.php";
$sql="UPDATE List SET Content=?, Date=? WHERE Id = ?";
$stmt=$db_host->prepare($sql);
$Id=$_POST["Id"];
$Content=$_POST["Content"];
$Date=$_POST["Date"];

try{
    $stmt->execute([$Content, $Date, $Id]);
    echo "資料修改完成 ";

}catch(PDOException $e){
    echo "資料庫修改失敗<br>";
    echo "Eroor: ".$e->getMessage(). "<br>";
    exit;
}

$db_host=null;  
header('location: BillboardList.php');


?>
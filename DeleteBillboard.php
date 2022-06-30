<?php
require_once "db_connect.php";

$Id=$_GET["Id"];
$stmt=$db_host->prepare("DELETE FROM List WHERE Id = :Id");
$stmt->execute(array(":Id"=>$Id));

try{
    $stmt->execute();
    echo "資料刪除完成";

}catch(PDOException $e){
    echo "資料庫刪除失敗<br>";
    echo "Eroor: ".$e->getMessage(). "<br>";
    exit;
}

header('location: BillBoardList.php');

?>
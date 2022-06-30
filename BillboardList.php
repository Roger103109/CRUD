<?php 
require_once "db_connect.php";
$stmt=$db_host->prepare("SELECT * FROM List");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="BillboardList.php">公佈欄系統</a>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
            <h1 class="h2">公佈欄資訊</h1>    
<div class="pb-2 d-flex justify-content-end">
    <a class="btn btn-warning" href="BillboardCreate.php">新增訂單</a>
</div>
<table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>編號</th>
                    <th>公布內容</th>
                    <th>日期</th>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php  try{
                    $stmt->execute();
                        while($row=$stmt->fetch()){
                    ?>
                <tr>
                    <td><?php echo $row["Id"] ?></td>
                    <td><?=$row["Content"]?></td>
                    <td><?=$row["Date"]?></td>
                    <td><a class="btn btn-secondary" href="BillboardChange.php?Id=<?=$row["Id"]?>">修改</a> <a class="btn btn-danger delete" href="DeleteBillboard.php?Id=<?=$row["Id"]?>">刪除</a></td>
                </tr>
                <?php
                }}
                catch(PDOException $e){
                echo "資料庫連結失敗<br>";
                echo "Error: ".$e->getMessage(). "<br>";
                exit;
            } ?>


                <?php  $db_host=null; ?>  
            </tbody>
        </table>
</body>
</html>
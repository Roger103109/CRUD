<?php
require_once "db_connect.php";

$Id=$_GET["Id"];
$stmt=$db_host->prepare("SELECT * FROM List WHERE Id = :Id");
$stmt->execute(array(":Id"=>$Id));


?>
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>修改公佈欄資訊</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="BillboardList.php">公佈欄系統</a>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
            <h1 class="h2">修改公佈欄資訊</h1>
        <form action="UpdateBillboard.php" method="post">
            <?php  try{
                $stmt->execute();
                    while($row=$stmt->fetch()){
            ?>
                <input type="hidden" name="Id" value="<?=$row["Id"]?>">
            <div class="mb-2">
                <label>編號:</label>
                <input type="text" class="form-control-plaintext" name="Id" value="<?=$row["Id"]?>" required>
            </div>
            <div class="mb-2">
                <label>內容:</label>
                <input type="text" class="form-control-plaintext" name="Content" value="<?=$row["Content"]?>" required>
            </div>
            <div class="mb-2">
                <label>日期:</label>
                <input id="gameDateTime" type="date" value="<?php echo date('Y-m-d\TH:i:s', strtotime($row["Date"])); ?>" name="Date" required>
            </div>
            <button class="btn btn-secondary" type="submit">修改</button> 
     <?php
        }}
        catch(PDOException $e){
            echo "資料庫連結失敗<br>";
            echo "Eroor: ".$e->getMessage(). "<br>";
            exit;
        }
        ?>
    </form>
    <a class="btn btn-info mt-2" href="BillboardList.php?>">返回</a>
        </div>
    </div>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  
  <script>window.jQuery || document.write('<script src="jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
</body>
</html>


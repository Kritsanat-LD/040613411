<?php
    $pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $keyword = $_GET["keyword"];
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE '%$keyword%'");
    $stmt->execute();


?>
 <?php     while($row = $stmt->fetch()){?>
        <br><img src="<?php echo $row['username'].".jpg"?>"><br>
        ชื่อ-นามสกุล : <?= $row['name']?><br>
        ที่อยู่ : <?= $row['address']?><br>
        email : <?= $row['email']?><br>
    <?php } ?>  
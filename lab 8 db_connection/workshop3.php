<!DOCTYPE html>
<?php include "connect.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
        
    while ($row = $stmt->fetch()) {
        echo "ชื่อสมาชิก : ".$row['name']."<br>";
        echo "ที่อยู่ : ".$row['address']."<br>";
        echo "อีเมลล์ :".$row['email']."<br>";
        echo "<img src='{$row['username']}.jpg'>"."<hr>";
    }
    ?>

</body>
</html>


<?php
    //Connecting:
    $dsn = "mysql:host=localhost;dbname=a6_database;charset=utf8mb4";
    $dbusername = "root";
    $dbpassword = "";

    $atorId = $_GET['actorId'];

    $pdo = new PDO($dsn, $dbusername, $dbpassword); 

    //Preparing:
    $stmt = $pdo->prepare("SELECT * FROM `actors` WHERE `actorId` = $actorId");

    //Executing:
    $stmt->execute();

    $row = $stmt->fetch();

?>

<h1>Are you 100% Sure You Want to DELETE This Record?</h1>
<p><?=$row['fName']?></p>
<p><?=$row['lName']?></p>
<p><?=$row['DOB']?></p>
<p><?=$row['bio']?></p>
<p><?=$row['height']?></p>
<p><?=$row['kidsNum']?></p>
<p><?=$row['profPic']?></p>
<p><?=$row['activity']?></p>

<a href = "A7_Display.php">NO</a>

<form action = "A7_deleteConfirm.php" method = "POST">
    <input name = "actorId" type = "hidden" value = "<?=$row['actorId']?>">
    <input type = "submit" value = "YES">
</form>
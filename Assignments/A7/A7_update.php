<?php

//receive variables
$actorId = $_GET["actorId"];


//connect

$dsn = "mysql:host=localhost;dbname=a6_database;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

//prepare
$stmt = $pdo->prepare("SELECT * FROM `actors` WHERE `actorId` = $actorId");

//execute
$stmt->execute();

$row = $stmt->fetch();
?>

<h1>Update record with id: <?= $personId ?></h1>

<form action="A7_confirmUpdate.php" method="POST">
	<input name="fName" value="<?= $row['fName'] ?>">
	<input name="lName" value="<?= $row['lName'] ?>">
	<input name="DOB" value="<?= $row['DOB'] ?>">
    <input name="bio" value="<?= $row['bio'] ?>">
    <input name="height" value="<?= $row['height'] ?>">
    <input name="kidsNum" value="<?= $row['kidsNum'] ?>">
	<input name="actorId" value="<?= $actorId ?>" type="hidden">
	<input type="submit">
</form>
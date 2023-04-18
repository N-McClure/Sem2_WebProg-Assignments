<?php

$fName = $_POST["fName"];
$lName = $_POST["lName"];
$DOB = $_POST["DOB"];
$bio = $_POST["bio"];
$height = $POST["height"];
$kidsNum = $POST["kidsNum"];
$profPic = $_POST["profPic"];
$activity = $_POST["activity"];

//Save Inputted Values to made DataBase:

//Connecting:
$dsn = "mysql:host=localhost;dbname=a6_database;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

//Preparing:
$stmt = $pdo->prepare("INSERT INTO `actors` (`actorId`, `fName`, `lName`, `DOB`, `bio`,`height`,`kidsNum`,`profPic`,`activity`) VALUES (NULL, '$fName', '$lName', '$DOB','$bio','$height','$kidsNum','$profPic','$activity');");

//Executing:
if ($stmt->execute())
{
    ?>
    <p>Thanks...Selling your Data because...Data = $$$</p>
<?php
}
else
{
    ?><p>Oops...Something went wrong.</p>
<?php
}

?> 
<?php

//confirm-update-person.php

//receive POST variables
$fName = $_POST["fName"];
$lName = $_POST["lName"];
$DOB = $_POST["DOB"];
$personId = $_POST["personId"];

//execute the update

//connect

$dsn = "mysql:host=localhost;dbname=a6_database;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

//prepare
$stmt = $pdo->prepare("UPDATE `actors` 
	SET `fName` = '$fName', 
	`lName` = '$lName', 
	`DOB` = '$DOB',
    `bio` = '$bio',
    `height` = '$height',
    `kidsNum` = '$kidsNum'
	WHERE `actors`.`actorId` = $actorId;");

//execute
if($stmt->execute()){ ?>
	<p>Record updated!</p>
<?php }else{ ?>
	<p>Oops something went wrong</p>
<?php }

?>

<a href="A7_Display.php">Show all records</a>
<?php
    //The Form Inputs:
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $DOB = $_POST["DOB"];
    $bio = $_POST["bio"];
    $height = $_POST["height"];
    $kidsNum = $_POST["kidsNum"];
    $profPic = $_POST["profPic"];
    $activity = $_POST["activity"];

//File Moving Around and Upload:
$uploaddir = 'ImageUploads/';
$uploadfile = $uploaddir . basename($_FILES['profPic']['name']);
move_uploaded_file($_FILES['profPic']['tmp_name'], $uploadfile)
?>

<img src="<?= $uploadfile; ?>" />
<a href="<?= $uploadfile; ?>"><?= basename($_FILES['profPic']['name']); ?></a>

<?=
    //We are Interacting with the DataBase...We gotta Connect, Prepare, and Execute...Let's Hit it:

    //Connecting:
    $dsn = "mysql:host=localhost;dbname=a6_database;charset=utf8mb4";
    $dbusername = "root";
    $dbpassword = "";

    $pdo = new PDO($dsn, $dbusername, $dbpassword); 

    //Preparing:
    $stmt = $pdo->prepare("SELECT * FROM `actors`");

    //Executing:
    $stmt->execute();

    //display results
    ?><ul><?php
    while($row = $stmt->fetch()) {     
        ?><li>
            <?= $row["actorId"] ?>
            <?= $row["fName"] ?>
            <?= $row["lName"] ?>
            <?= $row["DOB"] ?>
            <?= $row["bio"] ?>
            <?= $row["height"] ?>
            <?= $row["kidsNum"] ?>
            <?= $row["profPic"] ?>
            <?= $row["activity"] ?>
            <a href = "A7_deleteActor.php?actorId=<?=$row["actorId"]?>">Delete </a>
        </li>
    <?php } ?>
    </ul>

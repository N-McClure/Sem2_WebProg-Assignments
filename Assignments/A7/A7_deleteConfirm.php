<?php
    $actorId = $_POST['actorId'];

    //Connecting:
    $dsn = "mysql:host=localhost;dbname=a6_database;charset=utf8mb4";
    $dbusername = "root";
    $dbpassword = "";

    $pdo = new PDO($dsn, $dbusername, $dbpassword); 

    //Preparing:
    $stmt = $pdo->prepare("DELETE FROM actors WHERE `actors`.`actorId` = $actorId);");

    //Executing:
    if ($stmt->execute())
    {
        ?>
        <p>Record Deleted!...Maybe...Data = $$$</p>
    <?php
    }
    else
    {
        ?><p>Oops...Something went wrong.</p>
    <?php
    }

    ?> 
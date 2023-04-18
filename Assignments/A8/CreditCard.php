<?php

    session_start();
    $_SESSION["session-address"] = $_POST["address"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Page 3</title>
</head>
<body>
    <form action="DisplayInfo.php" method="POST">
        <h3>Credit-Card: </h3>
        <input type="text" name="CreditCard" placeholder="Enter your Credt-Card Number:">
        <input type="submit">
    </form>
</body>
</html>
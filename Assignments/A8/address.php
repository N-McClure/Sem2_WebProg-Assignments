<?php

    session_start();
    $_SESSION["session-name"] = $_POST["name"];
    $_SESSION["session-email"] = $_POST["email"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <form action="CreditCard.php" method="POST">
        <h3>Address: </h3>
        <input type="text" name="address" placeholder="Enter your Address:">
        <input type="submit">
    </form>
</body>
</html>
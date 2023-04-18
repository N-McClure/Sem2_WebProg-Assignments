<?php
session_start(); 
       
echo($_SESSION["session-name"]);
echo($_SESSION["session-email"]);
echo($_SESSION["session-address"]);
        
$_SESSION["session-CreditCard"] = $_POST["CreditCard"];
echo($_SESSION["session-CreditCard"]);

?>
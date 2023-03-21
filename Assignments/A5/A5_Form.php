<?php

?>

<form action = "A5Form_Info.php" enctype="multipart/form-data" method = "POST">
    <input type = "text" name = "fname" placeholder = "Enter First Name: ">
    <br>
    <input type = "text" name = "lname" placeholder = "Enter Last Name: ">
    <br>
    <input type = "text" name = "dob" placeholder = "Enter Date of Birth: ">
    <br>
    <input type = "textarea" name = "bio" placeholder = "Enter some Info about You: ">
    <br>
    <input type = "text" name = "height" placeholder = "Enter Height in CM: ">
    <br>
    <input type = "number" name = "numOfKids" placeholder = "Enter Number of Kids: ">
    <br>
    <input type = "file" name = "profPic">
    <br>
    <p>Check Me: </p><input type = "checkbox" name = "isActive">
    <br>
    <input type = "submit" name = "submit">

</form>
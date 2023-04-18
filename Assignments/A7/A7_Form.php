<?php 

?>

<h1>Actor Information Input Form</h1>

<form action = "A7_Display.php" method = "POST">
    <h4>First Name: </h4><input name="fName">
    <h4>Last Name: </h4><input name="lName">
    <h4>Date of Birth: </h4><input name="DOB">
    <h4>Bio: </h4><input name="bio">
    <h4>Height: </h4><input name="height">
    <h4>Number of Kids: </h4><input name="kidsNum">
    <h4>Profile Picture: </h4><input name="profPic" type="file">
    <h4>Activity: </h4><input name="activity" type="checkbox">
    <br>
    <input type="submit">

</form>
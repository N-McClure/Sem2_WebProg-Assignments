<?php 

//User Input Displaying Script:

//Receive Input:
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$dob = $_POST["dob"];
$bio = $_POST["bio"];
$height = $_POST["height"];
$numOfKids = $_POST["numOfKids"];
//$profPic = $_POST["profPic"];
$isActive = $_POST["isActive"];

//Check-Box Status Condition:
if ($isActive == null)
{
    $isActive = "Not Selected";
}
if ($isActive == "on")
{
    $isActive = "Selected";
}


?>


<h1>Entered First Name: <?=$fname?></h1>
<h1>Entered Last Name: <?=$lname?></h1>
<h1>Entered Date of Birth: <?=$dob?></h1>
<h1>Entered Bio: <?=$bio?></h1>
<h1>Entered Height: <?=$height?></h1>
<h1>Entered Number of Kids: <?=$numOfKids?></h1>
<h1>Uploaded File:<h1>

<?php
//File Moving Around and Upload:
$uploaddir = 'ImageUploads/';
$uploadfile = $uploaddir . basename($_FILES['profPic']['name']);
move_uploaded_file($_FILES['profPic']['tmp_name'], $uploadfile)
?>

<img src="<?= $uploadfile; ?>" />
<a href="<?= $uploadfile; ?>"><?= basename($_FILES['profPic']['name']); ?></a>
<h1>Check-Box Status: <?=$isActive?></h1>


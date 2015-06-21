<?php
require("db.php");

$email = $_POST["email"];

require("upload.php");



$date = $_POST["date"];
$time = $_POST["time"];
$latitude = $_POST["latitude"];
$longitude =$_POST["longitude"];
$comments =$_POST["comments"];
$email = $_POST["email"];
$type = $_POST["type"];
$confidence = $_POST["confidence"];
$sql = 'INSERT INTO Observations_1 (date,time,latitude,longitude,comments,email,type,picture_url,confidence) VALUES ("'.$date.'","'.$time.'","'.$latitude.'","'.$longitude.'","'.$comments.'","'.$email.'","'.$type.'","'.$picture_url.'","'.$confidence.'")';
$conn->query($sql) or die(mysqli_error($conn));



?>

<?php
require("db.php");
$date = $_POST["date"];
$time = $_POST["time"];
$latitude = $_POST["latitude"];
$longitude =$_POST["longitude"];
$comments =$_POST["comments"];
$email = $_POST["email"];
$sql = 'INSERT INTO Observations_1 (date,time,latitude,longitude,comments,email) VALUES ("'.$date.'","'.$time.'","'.$latitude.'","'.$longitude.'","'.$comments.'","'.'")';
$conn->query($sql) or die(mysqli_error($conn));
?>

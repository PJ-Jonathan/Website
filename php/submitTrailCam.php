<?php
require("db.php");

$email = $_POST["email"];

require("upload.php");

$bears = $_POST["bears"];
$brand = $_POST["brand"];
$model = $_POST["model"];
$malfunctioned = $_POST["malfunctioned"];
$sdate = $_POST["sdate"];
$stime = $_POST["stime"];
$edate =$_POST["edate"];
$etime =$_POST["etime"];
$sightings = $_POST["sightings"];
$comments = $_POST["comments"];
$latitude = $_POST["us2-lat"];
$longitude = $_POST["us2-lon"];

$sql = 'INSERT INTO trail_camera_data (email,start_date,start_time,end_date,end_time,sightings,latitude,longitude,comments,photo_url,bears_seen,brand,model,cam_malfunctioned) VALUES ("'.$email.'","'.$sdate.'","'.$stime.'","'.$edate.'","'.$etime.'","'.$sightings.'","'.$latitude.'","'.$longitude.'","'.$comments.'","'.$picture_url.'","'.$bears.'","'.$brand.'","'.$model.'","'.$malfunctioned.'")';
$conn->query($sql) or die(mysqli_error($conn));
echo '<script>window.location.href="../html/submissionComplete.html"</script>'


?>

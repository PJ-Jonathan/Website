<?php
require("db.php");
$email = $_POST["email"];
$sdate = $_POST["sdate"];
$stime = $_POST["stime"];
$edate =$_POST["edate"];
$etime =$_POST["etime"];
$sightings = $_POST["sighting"];
$comments = $_POST["comments"];
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];

$sql = 'INSERT INTO Observations_1 (email,start_date,start_time,end_date,end_time,sightings,latitude,longitude) VALUES ("'.$email.'","'.$sdate.'","'.$stime.'","'.$edate.'","'.$etime.'","'.$sightings.'","'.$latitude.'","'.$longitude.'")';
$conn->query($sql) or die(mysqli_error($conn));
echo '<script>window.location.href="../html/submissionComplete.html"</script>'


?>

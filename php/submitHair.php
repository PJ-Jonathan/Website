<?php
require("db.php");

$email = $_POST["email"];
require("upload.php");

$date = $_POST["date"];
$time = $_POST["time"];
$id = $_POST["siteid"];
$comments = $_POST["comments"];
$sql = 'INSERT INTO hair_collection_data (email,date, time, site_id, comments,photo_url)
VALUES ("'.$email.'","'.$date.'","'.$time.'","'.$id.'","'.$comments.'","'.$picture_url.'")';
if($conn->query($sql) or die(mysqli_error($conn))){
}else{
echo "Unable To Submit Please Try Again";
}
?>

<?php
 require("db.php");
 $date = $_POST["date"];
 echo $date;
 $time = $_POST["time"];
 echo $tiem;
 $latitude = $_POST["latitude"];
 echo $latitude;
 $longitude =$_POST["longitude"];
 echo $longitude;
 $comments =$_POST["comments"];
 echo $comments;

 
 $sql = 'INSERT INTO Observations_1 (date,time,latitude,longitude,comments) VALUES ("'.$date.'","'.$time.'","'.$latitude.'","'.$longitude.'","'.$comments.'")';
 $conn->query($sql) or die(mysqli_error($conn));



?>

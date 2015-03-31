<?php
 require("db.php");
 $date = "1/2/3";
 $sql = 'INSERT INTO Observations_1 (date) VALUES ("'$date'")';
 $conn->query($sql) or die(mysqli_error($conn));



?>

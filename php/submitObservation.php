<?php
 require("db.php");
 $date = "d";
 $sql = 'INSERT INTO Observations_1 (date) VALUES ("'$date'")';
 $conn->query($sql) or die(mysqli_error($conn));



?>

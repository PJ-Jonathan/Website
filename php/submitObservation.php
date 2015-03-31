<?php
 require("db.php");
 $date = $_POST["date"];
 $sql = 'INSERT INTO Observations_1 (date) VALUES ("'$date'")';
 $conn->query($sql) or die(mysqli_error($conn));



?>

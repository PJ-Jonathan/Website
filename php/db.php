<?php
$servername = "localhost";
$username = "ebear";
$password = "C4WfVQdEncPt4Ayp";
$dbname = "eBears_DB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Failed to Connect");
}
?>

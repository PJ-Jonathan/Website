<?php
include(db.php);
global $conn;
/*$servername = "localhost";
$username = "ebear";
$password = "C4WfVQdEncPt4Ayp";
$dbname = "eBears_DB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Failed to Connect");
}*/

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$sql = 'INSERT INTO contact (name,email, message)
VALUES ("'.$name.'","'.$email.'","'.$message.'")';

if($conn->query($sql) or die(mysqli_error($conn))){
  echo "Submited";
}else{
  echo "Failure";
}



?>

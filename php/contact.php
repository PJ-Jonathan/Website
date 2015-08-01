<?php
require("db.php");

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$sql = 'INSERT INTO contact (name,email, message)
VALUES ("'.$name.'","'.$email.'","'.$message.'")';

if($conn->query($sql) or die(mysqli_error($conn))){
  echo '
<script>window.location.href="../html/submissionComplete.html"</script>

  ';
}else{
  echo "Unable To Submit Please Try Again";
}



?>

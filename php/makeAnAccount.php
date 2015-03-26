<?php
require("db.php");
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$password = hash("sha512",$password);
$dob = 0;
$sql = 'INSERT INTO users (name,email, password)
VALUES ("'.$name.'","'.$email.'","'.$password.'")';
if($conn->query($sql) or die(mysqli_error($conn))){
echo 'Success';
}else{
echo "Unable To Submit Please Try Again";
}
?>

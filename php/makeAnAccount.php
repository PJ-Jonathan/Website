<?php
require("db.php");
$email = $_POST["email"];
$password = $_POST["password"];
$name = $_POST["name"];
$dob = $_POST["dob"];
$password = hash("sha512",$password);
$sql = 'INSERT INTO users (name,email, password, dob)
VALUES ("'.$name.'","'.$email.'","'.$password.'","'$dob'")';
if($conn->query($sql) or die(mysqli_error($conn))){
echo '
Success';
}else{
echo "Unable To Submit Please Try Again";
}
?>

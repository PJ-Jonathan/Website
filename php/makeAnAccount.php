<?php
require("db.php");
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
echo "Recieved POSTs";
$password = hash("sha512",$password);
echo " Hashed Passwords";
$sql = 'INSERT INTO users (name,email, password, dob)
VALUES ("'.$name.'","'.$email.'","'.$password.'","'$dob'")';
if($conn->query($sql) or die(mysqli_error($conn))){
echo '
Success';
}else{
echo "Unable To Submit Please Try Again";
}
?>

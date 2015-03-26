<?php
$username = $_POST["username"];
$password  = $_POST["pwd"];
$password = hash("sha512",$password);
echo $username.$password;


?>

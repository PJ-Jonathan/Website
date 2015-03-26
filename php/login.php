<?php
$username = $_POST["username"];
$password  = $_POST["pwd"];
$password = hash("sha512",$password);
$sql = 'SELECT * FROM users WHERE email="'.$username.'" AND password ="'$password.'"';
$result = $conn->query($sql) or die(mysqli_error($conn));
$numRow = $result->num_rows;
if($numRow==0){//Failed
echo "Failed";
}else{
echo "Auth";
}

?>

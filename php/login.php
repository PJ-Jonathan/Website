<?php
$username = $_POST["username"];
$password  = $_POST["pwd"];
echo "About to Hash";
$password = hash("sha512",$password);
$sql = 'SELECT * FROM users WHERE email="'.$username.'"';
echo "About to Query";
$result = $conn->query($sql) or die(mysqli_error($conn));
echo "Just Queryed";
$numRow = $result->num_rows;
if($numRow==0){//Failed
echo "Failed";
}else{
echo "Auth";
}

?>

<?php
require("db.php");
$username = $_POST["username"];
$password  = $_POST["pwd"];
$password = hash("sha512",$password);
$sql = 'SELECT * FROM users WHERE email="'.$username.'"';
$result = $conn->query($sql) or die(mysqli_error($conn));
$numRow = $result->num_rows;
echo $numRows;
if($numRow==1){//Failed
echo "Auth";
}else{
echo "Failed";
}

?>

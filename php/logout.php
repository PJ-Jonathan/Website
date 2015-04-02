<?php
session_start();
require("db.php");
echo "Started";
require("accounts.php");
echo "getting data";
$username = $_SESSION["username"];
$key = $_SESSION["key"];
$sql = 'SELECT * FROM users WHERE email="'.$username.'" AND userkey ="'.$key.'"';
echo "About to Query";	
$result = $conn->query($sql) or die(mysqli_error($conn));
echo "done Querying";
$numRow = $result->num_rows;
if($numRow==1){
    echo "True";
}else{
    echo "False";
}




$sql = 'UPDATE users SET userkey="'.$key.'" WHERE email="'.$username.'"';


$_SESSION["username"] = "";
$_SESSION["key"] = "";
session_destroy(); 
//echo '<script>window.location.href="/index.html"</script>';
?>

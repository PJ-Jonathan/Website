<?php
session_start();
require("db.php");
require("accounts.php");
$username = $_SESSION["username"];
$key = $_SESSION["key"];
$sql = 'SELECT * FROM users WHERE email="'.$username.'" AND userkey ="'.$key.'"';
$result = $conn->query($sql) or die(mysqli_error($conn));
$numRow = $result->num_rows;
if($numRow==1){
    $sql = 'UPDATE users SET userkey=" " WHERE email="'.$username.'"';
    $result = $conn->query($sql) or die(mysqli_error($conn));
}else{
}
$_SESSION["username"] = "";
$_SESSION["key"] = "";
session_destroy(); 
echo '<script>window.location.href="/index.html"</script>';
?>

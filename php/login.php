<?php
require("db.php");
$username = $_POST["username"];
$password  = $_POST["pwd"];
$password = hash("sha512",$password);
$sql = 'SELECT * FROM users WHERE email="'.$username.'" AND password ="'.$password.'"';
$result = $conn->query($sql) or die(mysqli_error($conn));
$numRow = $result->num_rows;
if($numRow==1){
  $key = str_shuffle("0123456789qwertyuiopasdfghjklzxcvbnm!@#$%^&*()?QWERTYUIOPZXCVBNM");
  $key = hash("sha512",$key);
  session_start();
  $_SESSION["username"] = $username;
  $_SESSION["key"] = $key;
  $sql = 'UPDATE users SET key="newkey" WHERE email="pjfin123@gmail.com"';
  $conn->query($sql) or die(mysqli_error($conn));
}else{
echo '<script>window.location.href="/html/login.html?wrongPass=true&&name='.$username.'"</script>';
}

?>

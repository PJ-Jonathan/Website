<?php
require("accounts.php");
$username = $_SESSION["username"];
$key = $_SESSION["key"];
echo check($username,$key);
echo "<br>";
echo chekc($username,"nottherightkey");

//$sql = 'UPDATE users SET userkey="'.$key.'" WHERE email="'.$username.'"';


$_SESSION["username"] = "";
$_SESSION["key"] = "";
session_destroy(); 
//echo '<script>window.location.href="/index.html"</script>';
?>

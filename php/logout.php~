<?php
echo "Starting";
require("accounts.php");
echo "Required";
$username = $_SESSION["username"];
$key = $_SESSION["key"];
echo $username;
echo $key;
echo check($username,$key);
echo "<br>";
echo check($username,"nottherightkey");

//$sql = 'UPDATE users SET userkey="'.$key.'" WHERE email="'.$username.'"';


$_SESSION["username"] = "";
$_SESSION["key"] = "";
session_destroy(); 
//echo '<script>window.location.href="/index.html"</script>';
?>

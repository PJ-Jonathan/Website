<?php
session_start();
require("accounts.php");
$username = $_SESSION["username"];
$key = $_SESSION["key"];
echo "About to check";
echo check($username,$key);
echo "<br>";
echo check($username,"nottherightkey");

//$sql = 'UPDATE users SET userkey="'.$key.'" WHERE email="'.$username.'"';


$_SESSION["username"] = "";
$_SESSION["key"] = "";
session_destroy(); 
//echo '<script>window.location.href="/index.html"</script>';
?>

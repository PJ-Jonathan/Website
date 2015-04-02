<?php
session_start();
echo "Started";
require("accounts.php");
echo "getting data";
$username = $_SESSION["username"];
$key = $_SESSION["key"];
echo "About to check";
	$username="pjfin123";
	$key="dfsa";
	$sql = 'SELECT * FROM users WHERE email="'.$username.'" AND password ="'.$key.'"';
	echo "About to Query";	
	$result = $conn->query($sql) or die(mysqli_error($conn));
	echo "done Querying";
	$numRow = $result->num_rows;
	if($numRow==1){
	    echo "True";
	}else{
		echo "False";
	}

//$sql = 'UPDATE users SET userkey="'.$key.'" WHERE email="'.$username.'"';


$_SESSION["username"] = "";
$_SESSION["key"] = "";
session_destroy(); 
//echo '<script>window.location.href="/index.html"</script>';
?>

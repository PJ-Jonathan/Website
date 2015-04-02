<?php
require("db.php");
function check($username, $key){
	$username="pjfin123";
	$key="dfsa";
	$sql = 'SELECT * FROM users WHERE email="'.$username.'" AND password ="'.$key.'"';
	echo "About to Query";	
	$result = $conn->query($sql) or die(mysqli_error($conn));
	$numRow = $result->num_rows;
	if($numRow==1){
	    echo "True";
	    return TRUE;
	}else{
		echo "False";
	    return FALSE;
	}
}
?>

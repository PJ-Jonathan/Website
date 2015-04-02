<?php
function check($username, $key){
	$sql = 'SELECT * FROM users WHERE email="'.$username.'" AND userkey ="'.$key.'"';
	$result = $conn->query($sql) or die(mysqli_error($conn));
	$numRow = $result->num_rows;
	if($numRow==1){
	    return TRUE;
	}else{
	    return FALSE;
	}
}
?>

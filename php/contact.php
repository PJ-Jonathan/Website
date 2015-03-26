<?php
require("db.php");

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$sql = 'INSERT INTO contact (name,email, message)
VALUES ("'.$name.'","'.$email.'","'.$message.'")';

if($conn->query($sql) or die(mysqli_error($conn))){
  echo '
<head>
<title>NY eBear</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class = "page-header">
	<h1>Submission Successful</h1> 
	<script type="text/javascript">
	window.setTimeout(function(){window.locationlhref = "../index.html";},2000);
	</script>
</div>
  ';
}else{
  echo "Unable To Submit Please Try Again";
}



?>

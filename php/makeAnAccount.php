<?php
require("db.php");
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$password = hash("sha512",$password);
$sql = 'SELECT * FROM users WHERE email="'.$email.'"';
$result = $conn->query($sql) or die(mysqli_error($conn));
$numRow = $result->num_rows;
if($numRow==0){
  $sql = 'INSERT INTO users (name,email, password)
  VALUES ("'.$name.'","'.$email.'","'.$password.'")';
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
      <center><div class = "page-header">
      <h1>Account Creation Successful</h1>
      <script type="text/javascript">
      window.setTimeout(function(){window.location.href = "/html/login.html";},2000);
      </script>
      </div></center>
      <center><h2>Please Log In</h2></center>
      ';
  }else{
  echo "Unable To Submit Please Try Again";
  }
}else{
  echo '<script>window.location.href="/html/makeAnAccount.html?taken=true&name='.$name.'"</script>';
  
}

?>

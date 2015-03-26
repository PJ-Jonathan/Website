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
  echo '<script>window.location.href="/html/login.html"</script>';
  }else{
  echo "Unable To Submit Please Try Again";
  }
}else{
  echo '<script>window.location.href="/html/makeAnAccount.html?taken=true&name='.$name.'"</script>';
  
}

?>

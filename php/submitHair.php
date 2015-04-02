<?php
require("db.php");
$email = $_POST["email"];
$date = $_POST["date"];
$time = $_POST["time"];
$id = $_POST["siteid"];
$comments = $_POST["comments"];
$sql = 'INSERT INTO hair_collection_data (email,date, time, site_id, comments)
VALUES ("'.$email.'","'.$date.'","'.$time.'","'.$id.'","'.$comments.'")';
if($conn->query($sql) or die(mysqli_error($conn))){
echo '
<script>window.location.href="../html/submissionComplete.html"</script>
';
}else{
echo "Unable To Submit Please Try Again";
}
?>

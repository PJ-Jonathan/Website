<?php
require("db.php");

$email = $_POST["email"];
$t=$email."-".time()."-".basename($_FILES["fileToUpload"]["name"]);
$picture_url = $t;
//$t = $email."-".$t."-". basename($_FILES["fileToUpload"]["name"];
$target_dir = "/var/www/upload/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir.$t;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
/*
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
*/
echo '<script>window.location.href="../html/submissionComplete.html"</script>';

$bears - $_POST["bears"];
$brand = $_POST["brand"];
$model = $_POST["model"];
$malfunctioned = $_POST["malfunctioned"];
$sdate = $_POST["sdate"];
$stime = $_POST["stime"];
$edate =$_POST["edate"];
$etime =$_POST["etime"];
$sightings = $_POST["sightings"];
$comments = $_POST["comments"];
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];

$sql = 'INSERT INTO trail_camera_data (email,start_date,start_time,end_date,end_time,sightings,latitude,longitude,comments,photo_url,bears_seen,brand,model,cam_malfunctioned) VALUES ("'.$email.'","'.$sdate.'","'.$stime.'","'.$edate.'","'.$etime.'","'.$sightings.'","'.$latitude.'","'.$longitude.'","'.$comments.'","'.$picture_url.'","'.$bears.'","'.$brand.'","'.$model.'","'.$malfunctioned.'")';
$conn->query($sql) or die(mysqli_error($conn));
echo '<script>window.location.href="../html/submissionComplete.html"</script>'


?>

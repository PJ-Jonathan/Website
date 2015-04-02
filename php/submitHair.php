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
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo '<script>window.location.href="../html/submissionComplete.html"</script>';
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



$date = $_POST["date"];
$time = $_POST["time"];
$id = $_POST["siteid"];
$comments = $_POST["comments"];
$sql = 'INSERT INTO hair_collection_data (email,date, time, site_id, comments,photo_url)
VALUES ("'.$email.'","'.$date.'","'.$time.'","'.$id.'","'.$comments.'","'.$picture_url.'")';
if($conn->query($sql) or die(mysqli_error($conn))){
}else{
echo "Unable To Submit Please Try Again";
}
?>

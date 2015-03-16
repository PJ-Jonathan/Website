<!DOCTYPE html>
<html>

<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}

</style>

<!--
<style>
  body {background-color:lightgrey}
  h1   {color:blue}
  p    {color:green}
</style>
-->

</head>

<body>

<?php
// <form action="example-new-new1.php" method="post">
// First name: <input type="text" name="name"><br>
// Last name: <input type="text" name="email"><br>
// <input type="submit">
// </form>

$servername = "localhost";
$username = "root";
$password = "test123";

$dbname = "eBears_DB";
$tablename = "Observations_1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// $usernamefirst = mysql_real_escape_string($_POST['name']);
// $usernamefirst = 'John-a';
// $usernamefirst = ($_POST['name']);
// $usernamefirst = addslashes($usernamefirst);
// $usernamelast = ($_POST['email']);
// $usernamelast = addslashes($usernamelast);

$date = addslashes($_POST['date']);
$time = addslashes($_POST['time']);
$latitude = addslashes($_POST['latitude']);
$longitude = addslashes($_POST['longitude']);
$type = addslashes($_POST['type']);
$picture_url = addslashes($_POST['picture_url']);
$comments = addslashes($_POST['comments']);
$email = addslashes($_POST['email']);
// $reg_date = addslashes($_POST['reg_date']);

// $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com');";
// $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$usernamefirst', 'Doe', 'bla');";
// $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$usernamefirst', '$usernamelast', 'bla');";
$sql = "INSERT INTO $tablename (date, time, latitude, longitude, type, picture_url, comments, email) 
               VALUES ('$date','$time','$latitude','$longitude','$type','$picture_url','$comments','$email');";

if ($date === "retrieve") {
   echo "<b><br>Retrieving table only, using keyword \"retrieve.\"</b><br>" . "\n";
   }

if ($date !== "retrieve"){
   if (($conn->query($sql) === TRUE)){
          // echo "here inserting record<br>";
          $last_id = $conn->insert_id;
          echo "New record created successfully. Last inserted ID is: " . $last_id . " <br> <br>";
      } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
      }
}

// echo "<br>";
$sql = "SELECT id, date, time, latitude, longitude, type, picture_url, comments, email, reg_date FROM $tablename";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
    // output data of each row
    // while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["id"] . " " . 
             // " date: " . $row["date"]. " " . 
             // " time: " . $row["time"] . " " .
             // " latitude: " . $row["latitude"] . " " .
             // " longitude: " . $row["longitude"] . " " .
             // " type: " . $row["type"] . " " .
             // " picture_url: " . $row["picture_url"] . " " .
             // " comments: " . $row["comments"] . " " .
             // " email: " . $row["email"] . " " .
             // " reg_date: " . $row["reg_date"] . "<br>";
    // }
// } else {
    // echo "0 results";
// }

echo "<br> <p>" . "\n";

// echo "<style>";
// echo "table, th, td {";
    // echo "border: 1px solid black;";
    // echo "border-collapse: collapse;";
// echo "}";
// echo "<style>";

// echo "<table border=\"2\" style=\"width:150\%\">";
echo "<table style=\"width:100\%\">" ."\n";
  echo "<tr>" ."\n";
    // "id","date","time","latitude","longitude","type","picture_url","comments","email","reg_date"
    echo "<th>ID</th>" ."\n";
    echo "<th>date</th>" ."\n"; 
    echo "<th>time</th>" ."\n";
    echo "<th>latitude</th>" ."\n";
    echo "<th>longitude</th>" ."\n";
    echo "<th>type</th>" ."\n";
    echo "<th>picture_url</th>" ."\n";
    echo "<th>comments</th>" ."\n";
    echo "<th>email</th>" ."\n";
    echo "<th>reg_date</th>" ."\n";
  echo "</tr>" ."\n";
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<tr>" ."\n";
          echo "<td>" . $row["id"] . "</td>" ."\n";
          echo "<td>" . $row["date"] . "</td>" ."\n";
          echo "<td>" . $row["time"] . "</td>" ."\n";
          echo "<td>" . $row["latitude"] . "</td>" ."\n";
          echo "<td>" . $row["longitude"] . "</td>" ."\n";
          echo "<td>" . $row["type"] . "</td>" ."\n";
          echo "<td>" . $row["picture_url"] . "</td>" ."\n";
          echo "<td>" . $row["comments"] . "</td>" ."\n";
          echo "<td>" . $row["email"] . "</td>" ."\n";
          echo "<td>" . $row["reg_date"] . "</td>" ."\n";
          echo "</tr>" ."\n";
      }
  } else {
      echo "0 results";
  }
    // echo "<td>10</td>";
    // echo "<td>10/10</td>";
    // echo "<td>11pm</td>";
    // echo "<td>50.0</td>";
    // echo "<td>60.0</td>";
    // echo "<td>fur</td>";
    // echo "<td>to follow</td>";
    // echo "<td>sighting</td>";
    // echo "<td>jon@gmail.com</td>";
    // echo "<td>02/10 11pm</td>";
  // echo "</tr>";
echo "</table>";

echo "<br> <p>";

exec('/bin/mv /var/www/html/myDir/ebears.csv /var/www/html/myDir/ebears_prev.csv'); 

// save csv format of mysql data
// $sql = "SELECT id FROM MyGuests INTO OUTFILE '\/var\/www\/html\/myDir\/guests.csv'"; 
// $sql = "SELECT \* FROM MyGuests INTO OUTFILE '\/var\/www\/html\/myDir\/guests.csv'"; 
$sql = "SELECT * FROM $tablename INTO OUTFILE '/var/www/html/myDir/ebears.csv'" .
       " FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\r\n'";
// echo $sql;
echo "Csv file can be found at url: <a href=" . "\"http://52.10.5.21/myDir/ebears.csv\"> http://52.10.5.21/myDir/ebears.csv</a><br>";
$result = $conn->query($sql);

// echo "<br>" . exec('whoami') . "<br>";
// echo exec('pwd') . "<br>";

// prepend append header csv format
// echo exec('pwd') . "<br>";
exec('cat myDir/header.csv myDir/ebears.csv > myDir/temp.csv');
exec('cat myDir/temp.csv > myDir/ebears.csv');

// SELECT order_id,product_name,qty FROM orders
// INTO OUTFILE '/tmp/orders.csv'
// FIELDS TERMINATED BY ','
// ENCLOSED BY '"'
// LINES TERMINATED BY '\n'

// SET @TS = DATE_FORMAT(NOW(),'_%Y_%m_%d_%H_%i_%s');
// SET @FOLDER = 'c:/tmp/';
// SET @PREFIX = 'orders';
// SET @EXT    = '.csv';
// SET @CMD = CONCAT("SELECT * FROM orders INTO OUTFILE '",@FOLDER,@PREFIX,@TS,@EXT,
    // "' FIELDS ENCLOSED BY '\"' TERMINATED BY ';' ESCAPED BY '\"'",
    // "  LINES TERMINATED BY '\r\n';");
// PREPARE statement FROM @CMD;
// EXECUTE statement;

$conn->close();

// echo "<br>" . exec('whoami') . "<br>";
// echo exec('pwd') . "<br>";

// testing writing to file
// $myFile = "/var/www/html/myDir/testFile.txt";
// $fh = fopen($myFile, 'w') or die("can't open file");
// $stringData = "Bobby Bopper\n";
// fwrite($fh, $stringData);
// $stringData = "Tracy Tanner\n";
// fwrite($fh, $stringData);
// fclose($fh);

$dir = '/var/www/html/myDir';

// create new directory with 744 permissions if it does not exist ye
// owner will be the user/group the PHP script is run under

// if ( !file_exists($dir) ) {
//  mkdir ($dir, 0744);
// }

// file_put_contents ($dir.'/test.txt', 'Hello File');
?>

</body>
</html>

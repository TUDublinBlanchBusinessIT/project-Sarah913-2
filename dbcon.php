<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "project_testing";
$port = 3306;

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql= "INSER INTO MyTable (firstname,lastname,email) VALUES ('JOHH', 'DOE', 'john@example.com')";

if (mysqli_query($conn, $sql)){
  echo "New record has been added!";
} else {
  echo "ERROR:" .$sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
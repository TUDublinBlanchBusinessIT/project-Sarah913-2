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
$sql= "INSERT INTO MyTable (firstname,lastname,email) VALUES ('JOHH', 'DOE', 'john@example.com')";

if (mysqli_query($conn, $sql)){
  echo "New record has been added!";
} else {
  echo "ERROR:" .$sql . "<br>" . mysqli_error($conn);
}

$sql = "SELECT id, firstname, lastname FROM MyTable";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0){
  while ($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. "-Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  } 
} else {
    echo "0 results found";
  }

mysqli_close($conn);
?>
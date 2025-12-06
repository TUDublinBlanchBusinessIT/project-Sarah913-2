<?php
include("dbcon.php");

$sql= "INSERT INTO MyTable (firstname,lastname,email) VALUES ('JOHN', 'DOE', 'john@example.com')";

if (mysqli_query($conn, $sql)){
  echo "New record has been added ";
} else {
  echo "ERROR:" .$sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

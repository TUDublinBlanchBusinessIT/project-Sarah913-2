<?php
session_start();
include ('dbcon.php');

$fish = $_POST['fish']?? null;
$fishlength = $_POST['fishlength']?? null;
$username = $_SESSION['username']?? null;


$sql = "INSERT INTO Critters (username,fish,fishlength)
VALUES('$username', '$fish', '$fishlength')";

 if (mysqli_query($conn, $sql)) {
    echo "choices have been saved";
 }

mysqli_close($conn);
?>
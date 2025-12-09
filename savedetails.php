<?php
session_start();
include ('dbcon.php');

$fish = $_POST['fish']?? null;
$fishlength = $_POST['fishlength']?? null;
$username = $_SESSION['username']?? null;


$sql = "INSERT INTO Critters (username,fish,fishlength)
VALUES('$username', '$fish', '$fishlength')";

 if (mysqli_query($conn, $sql)) {
    echo '<h1 align="center">Catch has been saved!</h1>';
 }

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align:center;">
    <img src="img1.png" style="height:250px; width:250px">
</div>
</body>
</html>
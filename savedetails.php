<?php
session_start();
include ('dbcon.php');

$username = $_SESSION['username'];
$fish = $_POST['fish'];
$fishlength = $_POST['fishlength'];
$kept_threw = $_POST['kept_threw'];


$sql = "INSERT INTO Critters (username,fish,fishlength,kept_threw)
VALUES('$username', '$fish', '$fishlength', '$kept_threw')";

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
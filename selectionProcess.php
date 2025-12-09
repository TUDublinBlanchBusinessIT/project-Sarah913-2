<?php
session_start();
include('dbcon.php');

if (!isset($_SESSION['lastAccessed'])) {
    $_SESSION['lastAccessed']=time();
}

if ($_SESSION['lastAccessed']<(time()-600)) {
    session_destroy();
    echo "Session timed out - too long since it has been used";
    exit;

}

else {
    $_SESSION['lastAccessed']=time();

}

$sql = "SELECT username FROM users";
$result = mysqli_query($conn, $sql);

echo "<TABLE>";
while($row = mysqli_fetch_assoc($result)) {
    $usr = $row ['username'];
    echo "<h1>Welcome back" . $_SESSION['username']. "</h1><br>";
    echo "What fish did you catch?";

}
echo "</TABLE>"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selctions</title>
</head>
<body>
    <form action="savedetails.php" method="POST">
    <SELECT name ="fish">
        <OPTION value="1">Salmon</OPTION>
        <OPTION value="1">Mackeral</OPTION>
        <OPTION value="1">Sardine</OPTION>
        <OPTION value="1">Cod</OPTION>
        <OPTION value="1">Tuna</OPTION>
        <OPTION value="1">Prawn</OPTION>
</SELECT>
<br><br>

<label>What size fish did you catch?:</label><BR>
<input class="form-control" id="length" type="range" min="1" max="15" value="50" name="fishlength">
<br><br>
<input type="submit" value="Save your choice">
</form>



    
</body>
</html>


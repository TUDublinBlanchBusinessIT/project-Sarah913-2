<?php
session_start();
include('dbcon.php');

$sql = "SELECT id, username, password FROM users";
$result = mysqli_query($conn, $sql);

echo "<TABLE>";
while($row = mysqli_fetch_assoc($result)) {
    $usr = $row ['username'];
    echo "<h1>Welcome back<h1> <TR><TD>$usr</TD></TR><br>";
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
    <SELECT name ="personID">
        <OPTION value="1">Salmon</OPTION>
        <OPTION value="1">Mackeral</OPTION>
        <OPTION value="1">Sardine</OPTION>
        <OPTION value="1">Cod</OPTION>
        <OPTION value="1">Tuna</OPTION>
        <OPTION value="1">Prawn</OPTION>
    
</body>
</html>


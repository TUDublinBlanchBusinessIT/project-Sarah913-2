<?php
session_start();
include('dbcon.php');

$sql = "SELECT id, username, password FROM users";
$result = mysqli_query($conn, $sql);

echo "<TABLE>";
while($row = mysqli_fetch_assoc($result)) {
    $usr = $row ['username'];
    echo "Welcome back <TR><TD>$usr</TD></TR>";

}
echo "</TABLE>"
?>


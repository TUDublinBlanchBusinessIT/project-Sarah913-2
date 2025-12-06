<?php
include("dbcon.php");

$sql = "SELECT id, firstname, lastname, email FROM MyTable";
$result = mysqli_query($conn, $sql);

echo "<TABLE>";
while ($row = mysqli_fetch_assoc($result)) {
    $id   = $row['id'];
    $fname = $row['firstname'];
    $lname = $row['lastname'];
    $email = $row['email'];
echo "<tr><td>$id</td><td>$fname</td><td>$lname</td><td>$email</td></tr>";
}

echo "</table>";

mysqli_close($conn);
?>

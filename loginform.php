<?php
session_start();
include("dbcon.php");
$formUser = $_POST['usr'];
$formPass = $_POST['pwd'];

$sql = "select username,password from user where username= '$formUser' ";
$result = mysqli_query($con,$sql);

if ($result->num_rows > 0) { 
    $row = mysqli_fetch_array ($result);
if (($formUser==$row['username']) && ($formPass==['password'])) {
session_start ();
$_SESSION ['username' ]=$formUser; 
header ('Location: loggedIn.php');
}
else {
    echo "username and password do not match!";
}
}
else {
    echo "there are no user matching that name";
}

?>
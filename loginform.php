<?php
session_start();
include("dbcon.php");
$formUser = $_POST['usr']?? null;
$formPwd = $_POST['pwd']?? null;

$sql = "select username,password from user where username= '$formUser' ";
$result = mysqli_query($con,$sql);

if ($result && $result ->num_rows > 0) { 
    $row = mysqli_fetch_asoc ($result);

if (($formUser==$row['username']) && ($formPwd==['password'])) {
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
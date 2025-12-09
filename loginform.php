<?php
session_start();
include("dbcon.php");

$formUser = $_POST['usr']?? null;
$formPwd = $_POST['pwd']?? null;

$sql = "SELECT username,password FROM users WHERE username= '$formUser' ";
$result = mysqli_query($conn,$sql);

if ($result && $result ->num_rows > 0) { 
    $row = mysqli_fetch_assoc ($result);

if (($formUser==$row['username']) && ($formPwd==$row['password'])) {
$_SESSION ['username' ]=$formUser; 
header ('Location: selectionProcess.php');
exit;

}else {
    echo " The username and password do not match!";
}
}
else {
    echo "The user you have entered does not exist ";
}

?>
<?php
session_start();

$_SESSION['passengerFN']=$_POST['firstname'];
$_SESSION['passengerSN']=$_POST['surname'];

?>
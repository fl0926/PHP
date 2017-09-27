<?php
session_start();

$_SESSION['firstName'] = $_POST['firstName'];
$_SESSION['lastName'] = $_POST['lastName'];
$_SESSION['userid'] = $_POST['userid'];
$_SESSION['password'] = $_POST['password'];

header("Location: index.php");
?>
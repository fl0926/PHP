<?php
session_start();
require_once 'functions.php';

if(userExists($_POST['userid'])){
    $_SESSION['registrationMessage'] = $_POST['userid']." is taken.";
    header("Location: register.php");
    exit();
}


createUser($_POST['userid'], $_POST['firstName'], $_POST['lastName'], $_POST['password']);

$_SESSION['firstName'] = $_POST['firstName'];
$_SESSION['lastName'] = $_POST['lastName'];
$_SESSION['userid'] = $_POST['userid'];
$_SESSION['password'] = $_POST['password'];

header("Location: index.php");
?>
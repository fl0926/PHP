<?php
include_once "functions.php";

session_start();

$userid = $_POST['userid'];
$passwd = $_POST['password'];

if(validateUser($userid, $passwd)){
    $userinfo = getUserInfo($userid);
    $_SESSION['firstName'] = $userinfo['firstName'];
    $_SESSION['lastName']  = $userinfo['lastName'];
    $_SESSION['userid']    = $userid;
    header("Location: index.php");
}else{
    header("Location: login.php");
}







?>
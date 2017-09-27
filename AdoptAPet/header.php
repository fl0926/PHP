<?php
    session_start();

    $loggedIn = false;

    if(isset($_SESSION['firstName'])){
        $firstName = $_SESSION['firstName'];
        $loggedIn = true;
    }

    if(isset($_SESSION['lastName'])){
        $lastName = $_SESSION['lastName'];
        $loggedIn = true;
    }

    if(isset($_SESSION['userid'])){
        $userid = $_SESSION['userid'];
        $loggedIn = true;
    }
?>
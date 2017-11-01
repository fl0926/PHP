<?php

function validateUser($userid, $passwd){
    if(userExists($userid)){
        if(getUserInfo($userid)['password'] === $passwd){
            return true;
        }
    }else{
        // Add a message to the session to be displayed on the login
        // reflecting the fact this user doesn't exist.
    }

    return false;
}


function getUserInfo($paramEmail){
    $db = getDB();
    $result = $db->query("select * from users where email = '$paramEmail'");
    $result->data_seek(0);
    $row = $result->fetch_assoc();

    return array("userid"=>$row['email'], "firstName"=>$row['firstName'], "lastName"=>$row['lastName'], "password"=>$row['password']);
}


function getDB(){
    $mysql = new mysqli("localhost", "root", "root", "adoptapet", 3306);

    if($mysql->connect_errno){
        echo("Failed to connect to our database.".$mysql->error);
    }

    return $mysql;
}


function createUser($paramEmail, $paramFirstName, $paramLastName, $paramPassword){
    $db = getDB();
    $pstmt = $db->prepare("insert into users (email, firstName, lastName, password) values (?, ?, ?, ?)");
    $pstmt->bind_param('ssss', $paramEmail, $paramFirstName, $paramLastName, $paramPassword);
    $pstmt->execute();
}

function userExists($paramEmail){
    $retVal = false;
    $db = getDB();
    $result = $db->query("select email from users where email = '$paramEmail'");
    $retVal = $result->num_rows > 0;
    return $retVal;
}









?>
<?php

function validateUser($userid, $passwd){
    if($userid == "user1" && $passwd == "secret"){
        return true;
    }else{
        return false;
    }
}


function getUserInfo($userid){
    return array("userid"=>"user1", "firstName"=>"User", "lastName"=>"One");
}

function getDB(){
    $mysql = new mysqli("localhost", "root", "root", "adoptapet", 3306);

    if($mysql->connect_errno){
        echo("Failed to connect to our database.".$mysql->error);
    }

    return $mysql;
}
?>
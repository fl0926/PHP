<?php
    require_once "functions.php";

    if(!isAdmin()){
        header("Location: index.php");
    }
?>
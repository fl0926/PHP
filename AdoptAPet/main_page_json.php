<?php
    require_once "header.php";
    require_once "functions.php";

    header("Content-type: application/json");

    $retVal = array();

    $db = getDB();
    $response = $db->query("select id, species, breed, name, age, gender, avail from pets");

    for($i = 0; $i < $response->num_rows; $i++) {
        $response->data_seek($i);
        $row = $response->fetch_assoc();
        array_push($retVal, $row);
    }

    echo json_encode($retVal, JSON_PRETTY_PRINT);
?>
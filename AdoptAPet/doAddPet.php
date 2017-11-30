<?php

require_once 'functions.php';
include "adminWall.php";


/*
 * Make sure all of the $_POST variables have a value if you want to
 * (a.k.a "validate your input")
 */

if($_FILES['photo']['error'] == 0){
    move_uploaded_file(
        $_FILES['photo']['tmp_name'],
        "/var/www/html/fall2017/AdoptAPet/images/".$_FILES['photo']['name']
    );

    createPetWithPhoto( $_POST['species'],
                        $_POST['breed'],
                        $_POST['name'],
                        $_POST['age'],
                        $_POST['gender'],
                        $_POST['availability'],
                        $_FILES['photo']['name']
    );
} else {
    createPet(  $_POST['species'],
                $_POST['breed'],
                $_POST['name'],
                $_POST['age'],
                $_POST['gender'],
                $_POST['availability']);
}

header("Location: index.php");
exit();
?>
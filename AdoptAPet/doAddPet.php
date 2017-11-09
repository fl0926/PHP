<?php

require_once 'functions.php';

/*
 * Make sure all of the $_POST variables have a value if you want to
 * (a.k.a "validate your input")
 */

createPet($_POST['species'],$_POST['breed'],$_POST['name'],$_POST['age'],$_POST['gender'],$_POST['availability']);
header("Location: index.php");
exit();
?>
<?php

require_once 'functions.php';

/*
 * Make sure $_GET['id'] has something in it if you want to
 * (a.k.a "validate your input")
 */

deletePet($_GET['id']);
header("Location: index.php");
exit();
?>
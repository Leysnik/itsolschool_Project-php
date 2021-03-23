<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
$id = $_GET[ 'id' ];
require('../php-validate/validate/connect.php');
$mysql->query("DELETE FROM `employers`  WHERE `id` = '$id' ");
$mysql->close();
header('Location:/');
?>
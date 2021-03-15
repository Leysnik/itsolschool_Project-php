<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
$id = $_GET[ 'id' ];
$mysql = new mysqli('localhost', 'sila', 'test', 'admin');
mysqli_set_charset($mysql, 'utf8');
$mysql->query("DELETE FROM `employers`  WHERE `id` = '$id' ");
$mysql->close();
header('Location:/');
?>
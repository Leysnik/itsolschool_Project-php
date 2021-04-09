<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
$id = filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);
require('../php-validate/validate/connect.php');
$mysql->query("DELETE FROM `employers`  WHERE `id` = '$id' ");
$mysql->close();
?>
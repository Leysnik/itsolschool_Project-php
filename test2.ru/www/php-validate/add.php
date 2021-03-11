<?php
session_start();
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$tel = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);
$login = $_SESSION['loginb'];
$code = rand(1000, 9999);
$mysql = new mysqli('127.0.0.1', 'sila', 'test', 'admin');
$mysql->query("INSERT INTO `$login` (`name` , `tel`,`code`) VALUES('$name','$tel','$code') ");
$mysql->close();
header('Location:/');
?>
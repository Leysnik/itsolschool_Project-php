<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass . 'hfgsg67');
$mysql = new mysqli('127.0.0.1', 'sila', 'test', 'admin');
$mysql->query("INSERT INTO `users` (`login` , `pass`)
VALUES('$login','$pass') ");
#$mysql->query("CREATE TABLE `$login` (`id` integer not null auto_increment primary key ,`name` char(100), `tel` char(50), `code` char(10))");
$mysql->close();
header('Location:/');
?>

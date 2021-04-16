<?php
session_start();
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$_SESSION['loginb'] = $login;
$pass = md5($pass . 'hfgsg67');
$mysql = new mysqli('127.0.0.1', 'a0525384_test', 'sila', 'a0525384_admin');
mysqli_set_charset($mysql, 'utf8');
$result = $mysql->query("SELECT * FROM `users` WHERE `Login` = '$login' AND `Pass` = '$pass'");
$user = $result->fetch_assoc();
if (count((array)$user) == 0) {
header('Location:/?error=1');
exit();
}
$_SESSION['grant'] = $user['Grant'];
$_SESSION['loginb'] = $user['Name'].$user['Surname'].$user['Lastname'];
$_SESSION['logint'] = $user['Login'];
setcookie('user', $user['Login'], time() + 3600, "/");
$mysql->close();
header('Location:/');
?>
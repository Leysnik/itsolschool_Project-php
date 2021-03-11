<?php
session_start();
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$_SESSION['loginb'] = $login;
$pass = md5($pass . 'hfgsg67');
$mysql = new mysqli('localhost', 'sila','test', 'admin');
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();
if (count((array)$user) == 0) {
    echo "Такой пользователь не найден";
    exit();
}
setcookie('user', $user['login'], time() + 3600, "/");
$mysql->close();
header('Location:/');
?>
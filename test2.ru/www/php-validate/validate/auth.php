<?php
session_start();
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$_SESSION['loginb'] = $login;
$pass = md5($pass . 'hfgsg67');
require('connect.php');
$result = $mysql->query("SELECT * FROM `users` WHERE `Login` = '$login' AND `Pass` = '$pass'");
$user = $result->fetch_assoc();
if (count((array)$user) == 0) {
    echo "Такой пользователь не найден";
    exit();
}
$_SESSION['grant'] = $user['Grant'];
$_SESSION['loginb'] = $user['Name'];
setcookie('user', $user['Login'], time() + 3600, "/");
$mysql->close();
header('Location:/');
?>
<?php
$login1 = filter_var(trim($_POST['login1']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
$lastname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);

$pass = md5($pass . 'hfgsg67');
require('connect.php');
$result = $mysql->query("SELECT COUNT(*) as `$login1` FROM `users` WHERE `Login` = '$login1'");
$count = $result->fetch_object()->$login1;
if($count == 0){
$mysql->query("INSERT INTO `users` (`Login` , `Pass`, `Name`, `Surname`, `Lastname`)
VALUES('$login1','$pass', '$name', '$surname', '$lastname') ");
$mysql->close();
header('Location:/pages/createAccount.php');
}else{
$mysql->close();
header('Location:/pages/createAccount.php?error=1');
}

?>

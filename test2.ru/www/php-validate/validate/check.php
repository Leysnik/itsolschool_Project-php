<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass . 'hfgsg67');
$mysql = new mysqli('127.0.0.1', 'a0525384_test', 'sila', 'a0525384_admin');
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
$num = mysqli_num_rows($result);
if($num == 0){
$mysql->query("INSERT INTO `users` (`login` , `pass`)
VALUES('$login','$pass') ");
#$mysql->query("CREATE TABLE `$login` (`id` integer not null auto_increment primary key ,`name` char(100), `tel` char(50), `code` char(10))");
$mysql->close();
header('Location:/');
}else{
$mysql->close();
header('Location:/pages/createAccount.php?error=1');
}

?>

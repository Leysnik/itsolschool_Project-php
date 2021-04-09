<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
$lastname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);

$pass = md5($pass . 'hfgsg67');
require('connect.php');
$result = $mysql->query("SELECT * FROM `users` WHERE `Login` = '$login'");
$num = mysqli_num_rows($result);
if($num == 0){
$mysql->query("INSERT INTO `users` (`Login` , `Pass`, `Name`, `Surname`, `Lastname`)
VALUES('$login','$pass', '$name', '$surname', '$lastname') ");
$mysql->close();
header('Location:/');
}else{
$mysql->close();
header('Location:/pages/createAccount.php?error=1');
}

?>

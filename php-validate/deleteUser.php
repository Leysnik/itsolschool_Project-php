<?php 
$id = $_GET['id'];
require('validate/connect.php');
$mysql->query("DELETE FROM `users`  WHERE `id` = '$id' ");
$mysql->close();
header('Location:/pages/createAccount.php');
?>
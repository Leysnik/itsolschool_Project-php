<?php 
$id = $_GET['id'];
require('validate/connect.php');
$mysql->query("DELETE FROM `work`  WHERE `id` = '$id' ");
$mysql->close();
header('Location:/pages/createWork.php');
?>
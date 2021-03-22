<?php 
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$tel = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);
$vk = filter_var(trim($_POST['vk']), FILTER_SANITIZE_STRING);
$instagram = filter_var(trim($_POST['instagram']), FILTER_SANITIZE_STRING);
$social = filter_var(trim($_POST['social']), FILTER_SANITIZE_STRING);
require('validate/connect.php');

if($email != ''){
$result = $mysql->query("SELECT id FROM `employers` WHERE `Email` = '$email'");
$count = mysqli_num_rows($result);
if($count == 0){
echo '0';
} else{
echo '1';}
}

if($tel != ''){
$result = $mysql->query("SELECT id FROM `employers` WHERE `Tel` = '$tel'");
$count = mysqli_num_rows($result);
if($count == 0){
echo '0';
} else{
echo '1';}
}

if($vk != ''){
$result = $mysql->query("SELECT id FROM `employers` WHERE `VK` = '$vk'");
$count = mysqli_num_rows($result);
if($count == 0){
echo '0';
} else{
echo '1';}
}

if($instagram != ''){
$result = $mysql->query("SELECT id FROM `employers` WHERE `Instagram` = '$instagram'");
$count = mysqli_num_rows($result);
if($count == 0){
echo '0';
} else{
echo '1';}
}

if($social != ''){
$result = $mysql->query("SELECT id FROM `employers` WHERE `Social` = '$social'");
$count = mysqli_num_rows($result);
if($count == 0){
echo '0';
} else{
echo '1';}
}
?>
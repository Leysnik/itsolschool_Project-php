<?php
$work = mb_strtolower(filter_var($_POST['name'], FILTER_SANITIZE_STRING));

require('connect.php');
$result = $mysql->query("SELECT * FROM `work` WHERE `Work` = '$work'");
$num = mysqli_num_rows($result);
if($num == 0){
$mysql->query("INSERT INTO `work` (`Work`)
VALUES('$work') ");
$mysql->close();
header('Location:/pages/createWork.php?error=2');
}else{
$mysql->close();
header('Location:/pages/createWork.php?error=1');
}
?>
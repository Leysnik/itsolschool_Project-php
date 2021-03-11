<?php
session_start(); 
$login = $_SESSION['loginb'];
$headers = "From: <botartur16@gmail.com>\r\n Content-type: text/plain; charset=utf-8 \r\n"; 
$mysql = new mysqli('localhost', 'test', 'test', 'admin');
if(!$mysql->query("SELECT * FROM `$login`"))
     echo $mysql->error;
$result = $mysql->query("SELECT * FROM `$login`");
while ( $row = mysqli_fetch_assoc( $result ) ) {
 mail($row['tel'], "Бот Артур", $row['code'], $headers);
 }
$mysql->close();
header('Location:/');
?>
<?php
session_start();
$checkNav = 1;
$login = $_SESSION['loginb'];
        if ($_COOKIE['user']==''){
       header('Location:/');
exit();}
       
?>
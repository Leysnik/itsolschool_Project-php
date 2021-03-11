<?php
        if ($_COOKIE['user']==''):
       header('Location:/');
          endif;
session_start();
$login = $_SESSION['loginb'];
?>
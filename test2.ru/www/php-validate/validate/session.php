<?php
session_start();
$login = $_SESSION['loginb'];
        if ($_COOKIE['user']==''):
       header('Location:/');
          endif;
?>
<?php
session_start();
$login = $_SESSION['loginb'];
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Бот-Артур</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/png">
</head>
<body>
    <main>
        <?php

        require('pages/header.php');  
        ?>
        <?php
        if ($_COOKIE['user']==''):
      require('pages/sign.php');  
      
            else:
   
           require('pages/mainWindow.php');
          endif; ?>
   
</main>
</body>
</html>
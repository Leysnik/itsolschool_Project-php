<?php
session_start();
$login = $_SESSION['loginb'];
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>БД</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/png">
</head>
<body>
        <?php
        require('pages/header.php'); 
        ?>
    <main class="flex-container">
        <?php
        if ($_COOKIE['user']==''):
      require('pages/sign.php');  
      
            else:
   
           require('pages/mainWindow.php');
          endif; ?>
   
</main>
</body>
</html>
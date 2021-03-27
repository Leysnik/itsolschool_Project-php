<?php 
require('../php-validate/validate/session.php');
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Создать резюме</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/icon.png" type="image/png">
</head>
<body>
    <main>
                <?php
        require('../pages/header.php');      
      require('../php-validate/create/create.php');  
 ?>


        </main>
    <script src="../scripts/checkNew.js"></script>
    <script src="../scripts/checkPrimary.js"></script>
        <script src="../scripts/handleFile.js"></script>
</body>
</html>
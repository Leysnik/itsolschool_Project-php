<?php
require('../php-validate/validate/session.php');
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>БД</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/icon.png" type="image/png">
</head>
<body>
    <main>
                <?php
        require('../pages/header.php');      
 ?>     
        <section class="sign-page">
            <form action="../php-validate/validate/check.php" method="post">
                <div><h2  class="reg"><label>Регистрация нового аккаунта</label></h2></div>
                <div class="form-item"><input name="login" id="login" class="text-field" type="text" placeholder="Логин"></div>
               
                <div class="form-item"><input name="pass" id="pass" class="text-field" type="password" placeholder="Пароль" ></div>
                <?php 
                $error = $_GET['error'];
                if($error == 1):
                ?>
                <span class="red">Такой пользователь уже имеется</span>
                                <?php endif; ?>
                <div class="form-item butt-container"><input class="step-butt butt" type="submit" value="Войти"></div>
            </form>
        </section>
        </main>
    <script src="../scripts/checkNew.js"></script>
</body>
</html>
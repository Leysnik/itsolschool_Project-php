<?php
require('../php-validate/validate/session.php');
if($_SESSION['grant'] == 0){header('Location:/');}
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
        <section class="flex-container">
            <form action="../php-validate/validate/check.php" method="post">
                <div><h2  class="reg"><label>Пользователи</label></h2></div>
                <input name="name"  class="text-field-2" type="text" placeholder="ФИО" required>
                <input name="login"  class="text-field-2" type="text" placeholder="Логин" required>
               
                <input name="pass" id="pass" class="text-field-2" type="password" placeholder="Пароль" required>
                <?php 
                $error = $_GET['error'];
                if($error == 1):
                ?>
                <span class="red">Такой пользователь уже имеется</span>
                                <?php endif; ?>
<input class="step-butt reg-butt" type="submit" value="Создать">
            </form>
            <div class="center">
            <table>
                <tr><th>ФИО</th><th>Логин</th><th>Функции</th></tr>
                <?php 
                require('../php-validate/validate/connect.php');
                $result = $mysql->query("SELECT * FROM `users`");
                while ( $row = mysqli_fetch_assoc( $result ) ) {
                if($row['Grant'] != 1){
                    echo '<tr><td>';
                    print_r($row['Name']);
                    echo '</td>';
                    echo '<td>';
                    print_r($row['Login']);
                    echo '</td>';
                    echo '<td><a class="direct alter-butt butt butt-table butt-table-2" href="../php-validate/deleteUser.php?id=';
                    print_r($row['id']);
                    echo '">Удалить</a></td></tr>';
                    }
                    }
                    $mysql->close();
                ?>
            </table>
                </div>
        </section>
        </main>
</body>
</html>
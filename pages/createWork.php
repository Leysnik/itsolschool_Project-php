<?php
require ('../php-validate/validate/session.php');
if ($_SESSION['grant'] == 0)
{
    header('Location:/');
}
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Должность</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/icon.png" type="image/png">
</head>
<body>
    <main>
                <?php
require ('../pages/header.php');
?>     
        <section class="flex-container">
            <form action="../php-validate/validate/checkWork.php" method="post">
                <div><h2  class="reg"><label>Должности</label></h2></div>
                <input name="name"  class="text-field-2" type="text" placeholder="Должность" required>
<input class="step-butt reg-butt" type="submit" value="Создать">
                <?php
$error = $_GET['error'];
if ($error == 1):
?>
                <br>
                <span class="red">Такая должность уже имеется</span>
                                <?php
endif; ?>
                                <?php
$error = $_GET['error'];
if ($error == 2):
?>
                <br>
                <span class="">Должность создана</span>
                                <?php
endif; ?>

            </form>
            <div class="center">
            <table>
                <tr><th>Должность</th><th>Функции</th></tr>
                <?php
require ('../php-validate/validate/connect.php');
$result = $mysql->query("SELECT * FROM `work`");
while ($row = mysqli_fetch_assoc($result))
{
    if ($row['Grant'] != 1)
    {
        echo '<td>';
        print_r($row['Work']);
        echo '</td>';
        echo '<td><a class="direct alter-butt butt butt-table butt-table-2" href="../php-validate/deleteWork.php?id=';
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

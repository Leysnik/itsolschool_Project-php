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
    <title>Пользователи</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/icon.png" type="image/png">
</head>
<body>
                <?php
require ('../pages/header.php');
?>  
<div class="flex-container">
    <main class="flex-container">
   
        <section class="flex-container">
            <form action="../php-validate/validate/check.php" method="post" class=" flex-start">
                <div><h2  class="reg normal"><label>Пользователи</label></h2></div>
                <div class="flex-container-2 ">
                <input name="surname"  class="user" type="text" placeholder="Фамилия" required>
                <input name="name"  class="user" type="text" placeholder="Имя" required>
                <input name="lastname"  class="user" type="text" placeholder="Отчество">
                </div>
                <br>
                <div class="flex-container-2">
                <input name="login1"  class="user" type="text" placeholder="Логин" required>
                <div class="flex-container">
                <input name="pass" id="pass" class="user" oninput="checkPasswords(form)" type="password" placeholder="Пароль" required>
                <div id="box" class="secure"></div>
                </div>
                </div>
                    <?php
$error = $_GET['error'];
if ($error == 1):
?>
                <span class="red">Такой пользователь уже имеется</span>
                                <?php
endif; ?>
                        
                <label for="create" class="butt butt-width user-butt">
                        <input id="create" class="n-butt" type="submit" value="Создать аккаунт">
                            <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<g filter="url(#filter0_ii)">
<path d="M1.02941 8.73544L17.9706 8.73544M17.9706 8.73544L10.7101 1.58838M17.9706 8.73544L10.7101 15.8825" stroke="url(#paint0_linear)" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<filter id="filter0_ii" x="-0.470581" y="0.0883789" width="19.9412" height="17.2941" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="-0.5"/>
<feGaussianBlur stdDeviation="0.25"/>
<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.4 0"/>
<feBlend mode="normal" in2="shape" result="effect1_innerShadow"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="0.5" dy="0.5"/>
<feGaussianBlur stdDeviation="0.25"/>
<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.127604 0 0 0 0 0.267969 0 0 0 0 0.408333 0 0 0 0.4 0"/>
<feBlend mode="normal" in2="effect1_innerShadow" result="effect2_innerShadow"/>
</filter>
<linearGradient id="paint0_linear" x1="0.0613429" y1="15.8825" x2="46.9505" y2="-22.7883" gradientUnits="userSpaceOnUse">
<stop stop-color="#352958"/>
<stop offset="0.234375" stop-color="#352958"/>
<stop offset="0.442708" stop-color="#EFF0FF"/>
<stop offset="0.682292" stop-color="#352958"/>
<stop offset="1" stop-color="#EFF0FF"/>
</linearGradient>
</defs>
</svg>
                        </label>
            </form>
            
        </section>
        </main>
    <div class="center">
            <table>
                <tr><th>ФИО</th><th>Логин</th><th>Функции</th></tr>
                <?php
require ('../php-validate/validate/connect.php');
$result = $mysql->query("SELECT * FROM `users`");
while ($row = mysqli_fetch_assoc($result))
{
    if ($row['Grant'] != 1)
    {
        echo '<tr><td>';
        print_r($row['Name'] . ' ' . $row['Surname'] . ' ' . $row['Lastname']);
        echo '</td>';
        echo '<td>';
        print_r($row['Login']);
        echo '</td>';
        echo '<td><a class="red" href="../php-validate/deleteUser.php?id=';
        print_r($row['id']);
        echo '">Удалить</a></td></tr>';
    }
}
$mysql->close();
?>
            </table>
                </div>
    <script src="../scripts/passSec.js"></script>
	</div>
</body>
</html>


<table>
 <?php

$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
$lastname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
$birth = filter_var(trim($_POST['birth']), FILTER_SANITIZE_STRING);
$sex = filter_var(trim($_POST['sex']), FILTER_SANITIZE_STRING);
$education = filter_var(trim($_POST['Education']), FILTER_SANITIZE_STRING);
$city = filter_var(trim($_POST['city']), FILTER_SANITIZE_STRING);
$tel = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$social = filter_var(trim($_POST['social']), FILTER_SANITIZE_STRING);
$meetday = filter_var(trim($_POST['meetday']), FILTER_SANITIZE_STRING);
$testtime = filter_var(trim($_POST['testtime']), FILTER_SANITIZE_STRING);
$datevacantion = filter_var(trim($_POST['datevacantion']), FILTER_SANITIZE_STRING);
$vk = filter_var(trim($_POST['vk']), FILTER_SANITIZE_STRING);
$instagram = filter_var(trim($_POST['instagram']), FILTER_SANITIZE_STRING);
$Work = filter_var(trim($_POST['Work']), FILTER_SANITIZE_STRING);

 $mysql = new mysqli('localhost', 'sila', 'test', 'admin');
 mysqli_set_charset($mysql, 'utf8');
if(!$mysql->query("SELECT * FROM `employers`"))
     echo $mysql->error;
$result = $mysql->query("SELECT * FROM `employers`");
echo '<tr><th>Имя</th><th>Фамилия</th><th>Отчество</th><th>Пол</th><th>Дата рождения</th><th>Образование</th><th>Места учебы</th><th>Должность</th><th>Город</th><th>Телефон</th><th>Почта</th><th>Соц. сеть</th><th>Дата собеседования</th><th>Дата стажировки</th><th>Дата размещения вакансии</th><th>Комментарий</th><th>Резюме</th><th>Тестовое задание</th><th>Редактирование</th></tr>';
while ( $row = mysqli_fetch_assoc( $result ) ) {
if(($row['Name'] == $name or $name == '') and ($row['Surname'] == $surname or $surname == '') and ($row['Lastname'] == $lastname or $lastname == '') and ($row['Birth'] == $birth or $birth == '') and ($row['Sex'] == $sex or $sex == '') and ($row['Education'] == $education or $education == '') and ($row['City'] == $city or $city == '') and ($row['Tel'] == $tel or $tel == '') and ($row['Email'] == $email or $email == '') and ($row['Social'] == $social or $social == '') and ($row['vk'] == $vk or $vk == '') and ($row['instagram'] == $instagram or $instagram == '') and ($row['Work'] == $work or $work == '') and ($row['Meetday'] == $meetday or $meetday == '') and ($row['Testtime'] == $testtime or $testtime == '') and ($row['Datevacantion'] == $datevacantion or $datevacantion == '')){
 echo '<tr><td class="Name-table">';
    print_r( $row['Name'] );
 echo '</td><td class="Surname-table">';
    print_r( $row['Surname'] );
 echo '</td><td class="Lastname-table">';
    print_r( $row['Lastname'] );
 echo '</td><td class="sex-table">';
    print_r( $row['Sex'] );
 echo '</td><td class="Birth-table">';
    print_r( $row['Birth'] );
 echo '</td><td class="Education-table">';
    print_r( $row['Education'] );
echo '</td><td class="Place-table">';
    print_r( $row['EducatePlace'] );
 echo '</td><td class="Work-table">';
    print_r( $row['Work'] );
 echo '</td><td class="City-table">';
    print_r( $row['City'] );
 echo '</td><td class="Tel-table">';
    print_r( $row['Tel'] );
 echo '</td><td class="Email-table">';
    print_r( $row['Email'] );
 echo '</td><td class="Social-table">';
    if($row['vk'] != null){
         echo '<a href="';
        print_r( $row['vk'] );
         echo '" target="_blank" >ВК</a>';
         
    echo '<br>';
    }
       if($row['instagram'] != null){
         echo '<a href="';
        print_r( $row['instagram'] );
         echo '" target="_blank">Инстаграм</a>';
    echo '<br>';
    }
       if($row['Social'] != null){
         echo '<a href="';
        print_r( $row['Socail'] );
         echo '" target="_blank">Доп. соц. сеть</a>';
         }

 echo '</td><td class="Meet-table">';
    print_r( $row['Meetday'] );
 echo '</td><td class="Test-table">';
    print_r( $row['Testtime'] );
 echo '</td><td class="Date-table">';
    print_r( $row['Datevacantion'] );
 echo '</td><td class="Comment-table">';
    print_r( $row['Comment'] );
 echo '</td><td class="Resume-table">';
        echo '<a download href="../resume/';
        print_r($row['resume']);
        echo '" >Резюме</a>';
 echo '</td><td class="TestWork-table">';
        echo '<a download href="../testWork/';
        print_r($row['testWork']);
        echo '" >Тестовое задание</a>';
        echo '</td><td id="rewrite" class="rewrite-table">';
        echo '<a class="alter-butt butt butt-table butt-table-1" href="../pages/Reduct.php?id=';
        print_r($row['id']);
        echo '" >Редактировать</a>' ;
        echo '<a id="fake-delete"  class="alter-butt butt butt-table butt-table-2 grey">Удалить</a>';
        echo '<a id="delete"  class="alter-butt butt butt-table butt-table-2 disabled" href="../pages/delete.php?id=';     
        print_r($row['id']);
        echo '">Удалить</a>' ;
        echo '<a  id="still-delete"  class="disabled alter-butt butt butt-table butt-table-3 " >Скрыть</a>';
    echo '</td>';
 
 echo '</tr>';
 }
 }
$mysql->close();
 ?>
    
</table>
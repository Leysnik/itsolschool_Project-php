 <?php
 if(!empty($_GET)){
echo '<section class="table">';
echo '<table>';
$name = $_GET['name'];
$surname = $_GET['surname'];
$lastname = $_GET['lastname'];
$birth = $_GET['birth'];
$sex = $_GET['sex'];
$education = $_GET['education'];
$city = $_GET['city'];
$tel = $_GET['tel'];
$email = $_GET['email'];
$social = $_GET['social'];
$meetday = $_GET['meetday'];
$testtime = $_GET['testtime'];
$datevacantion = $_GET['datevacantion'];
$vk = $_GET['vk'];
$instagram = $_GET['instagram'];
$work = $_GET['work'];

 require('validate/connect.php');
if(!$mysql->query("SELECT * FROM `employers`"))
     echo $mysql->error;
$result = $mysql->query("SELECT * FROM `employers`");
?>

<tr><th>ФИО</th><th>Пол</th><th>Дата рождения</th><th>Образование</th><th>Места учебы</th><th>Должность</th><th>Город</th><th>Телефон</th><th>Почта</th><th>Соц. сеть</th><th>Дата собеседования</th><th>Дата стажировки</th><th>Дата размещения вакансии</th><th>Комментарий</th><th>Файлы</th><th>Редактирование</th></tr>
<?php
while ( $row = mysqli_fetch_assoc( $result ) ) {
if(($row['Name'] == $name or $name == '') and ($row['Surname'] == $surname or $surname == '') and ($row['Lastname'] == $lastname or $lastname == '') and ($row['Birth'] == $birth or $birth == '') and ($row['Sex'] == $sex or $sex == '') and ($row['Education'] == $education or $education == '') and ($row['City'] == $city or $city == '') and ($row['Tel'] == $tel or $tel == '') and ($row['Email'] == $email or $email == '') and ($row['Social'] == $social or $social == '') and ($row['VK'] == $vk or $vk == '') and ($row['Instagram'] == $instagram or $instagram == '') and ($row['Work'] == $work or $work == '') and ($row['Meetday'] == $meetday or $meetday == '') and ($row['Testtime'] == $testtime or $testtime == '') and ($row['Datevacantion'] == $datevacantion or $datevacantion == '')){
 ?>
<tr><td class="Name-table">
    <?php
    print_r( $row['Surname']);
    echo ' ';
    print_r( $row['Name'] );
    echo ' ';
    print_r( $row['Lastname'] ); 
    ?>
</td><td class="sex-table">
    <?php
    print_r( $row['Sex'] );
    ?>
 </td><td class="Birth-table">
    <?php
    print_r( $row['Birth'] );
    ?>
</td><td class="Education-table">
    <?php
    print_r( $row['Education'] );
    ?>
</td><td class="Place-table">
    <?php
    print_r( $row['EducatePlace'] );
    ?>
</td><td class="Work-table">
    <?php
    print_r( $row['Work'] );
    ?>
</td><td class="City-table">
    <?php
    print_r( $row['City'] );
    ?>
</td><td class="Tel-table">
    <?php
    print_r( $row['Tel'] );
    ?>
</td><td class="Email-table">
    <?php
    print_r( $row['Email'] );
    ?>
</td><td class="Social-table">
    <?php
    if($row['VK'] != null){
         echo '<a href="';
        print_r( $row['VK'] );
         echo '" target="_blank" >ВК</a>';
         
    echo '<br>';
    }
       if($row['Instagram'] != null){
         echo '<a href="';
        print_r( $row['Instagram'] );
         echo '" target="_blank">Инстаграм</a>';
    echo '<br>';
    }
       if($row['Social'] != null){
          echo '<a href="';
        print_r( $row['Social'] );
         echo '" target="_blank">Доп. соц. сеть</a>';
         }
?>
</td><td class="Meet-table">
    <?php
    print_r( $row['Meetday'] );
    ?>
</td><td class="Test-table">
    <?php
    print_r( $row['Testtime'] );
    ?>
 </td><td class="Date-table">
    <?php
    print_r( $row['Datevacantion'] );
    ?>
</td><td class="Comment-table">
    <?php
    print_r( $row['Comment'] );
    ?>
 </td><td class="Resume-table">
        <div><a download href="../resume/<?php
        print_r($row['resume']);?>
        " >Резюме</a></div>
        <br><div><a download href="../testWork/<?php
        print_r($row['testWork']);?>
        " >Тестовое задание</a></div>

        </td><td id="rewrite" class="rewrite-table">
        <a target="_blank" class="direct alter-butt butt butt-table butt-table-1" href="../pages/reduct.php?id=<?php print_r($row['id']);?>" >Редактировать</a>
        <a id="fake-delete"  class="direct alter-butt butt butt-table butt-table-2 grey">Удалить</a>
        <a id="delete"   class="direct alter-butt butt butt-table butt-table-2 disabled" href="../pages/delete.php?id=<?php print_r($row['id']);?>
        ">Удалить</a>
        <a  id="still-delete"  class="disabled alter-butt butt butt-table butt-table-3 " >Скрыть</a>
    </td>
 
</tr>
<?php
 }
 }
$mysql->close();


echo '</table>';
echo '</section>';
}
 ?>
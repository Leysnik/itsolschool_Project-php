
<table>
 <?php
 $mysql = new mysqli('localhost', 'sila', 'test', 'admin');
 mysqli_set_charset($mysql, 'utf8');
if(!$mysql->query("SELECT * FROM `employers`"))
     echo $mysql->error;
$result = $mysql->query("SELECT * FROM `employers`");
echo '<tr><th>Имя</th><th>Фамилия</th><th>Отчество</th><th>Пол</th><th>Дата рождения</th><th>Образование</th><th>Места учебы</th><th>Должность</th><th>Город</th><th>Телефон</th><th>Почта</th><th>Соц. сеть</th><th>Дата собеседования</th><th>Дата стажировки</th><th>Дата размещения вакансии</th><th>Комментарий</th><th>Резюме</th><th>Тестовое задание</th><th>Редактирование</th></tr>';
while ( $row = mysqli_fetch_assoc( $result ) ) {
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
        echo '<button  class="alter-butt butt butt-table butt-table-2" >Удалить</button>' ;
 echo '</td>';
 
 echo '</tr>';
 }
$mysql->close();
 ?>
    
</table>
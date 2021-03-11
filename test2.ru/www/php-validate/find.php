<table class="table">
 <?php
 $mysql = new mysqli('localhost', 'sila', 'test', 'admin');
 mysqli_set_charset($mysql, 'utf8');
if(!$mysql->query("SELECT * FROM `employers`"))
     echo $mysql->error;
$result = $mysql->query("SELECT * FROM `employers`");
echo '<tr><th>Имя</th><th>Фамилия</th><th>Отчество</th><th>Пол</th><th>Дата рождения</th><th>Образование</th><th>Город</th><th>Телефон</th><th>Почта</th><th>Соц. сеть</th><th>Дата собеседования</th><th>Дата стажировки</th><th>Дата размещения вакансии</th><th>Комментарий</th><th>Резюме</th><th>Тестовое задание</th></tr>';
while ( $row = mysqli_fetch_assoc( $result ) ) {
 echo '<tr><td>';
 print_r( $row['Name'] );
 echo '</td><td>';
  print_r( $row['Surname'] );
 echo '</td><td>';
  print_r( $row['Lastname'] );
 echo '</td><td>';
  print_r( $row['Sex'] );
 echo '</td><td>';
  print_r( $row['Birth'] );
 echo '</td><td>';
  print_r( $row['Education'] );
 echo '</td><td>';
  print_r( $row['City'] );
 echo '</td><td>';
  print_r( $row['Tel'] );
 echo '</td><td>';
  print_r( $row['Email'] );
 echo '</td><td>';
  print_r( $row['Social'] );
 echo '</td><td>';
  print_r( $row['Meetday'] );
 echo '</td><td>';
  print_r( $row['Testtime'] );
 echo '</td><td>';
  print_r( $row['Datevacantion'] );
 echo '</td><td>';
  print_r( $row['Comment'] );
 echo '</td><td>';
  print_r( $row['resume'] );
 echo '</td><td>';
  print_r( $row['testWork'] );
 echo '</td>';
 echo '</tr>';
 }
$mysql->close();
 ?>
    
</table>
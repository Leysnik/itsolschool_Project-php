 <?php
 $name = $_GET['name'];
$surname = $_GET['surname'];
$lastname = $_GET['lastname'];
$birth_min = $_GET['birth_min'];
$birth_max = $_GET['birth_max'];
$sex = $_GET['sex'];
$city = $_GET['city'];
$tel = $_GET['tel'];
$email = $_GET['email'];
$social = $_GET['social'];
$vk = $_GET['vk'];
$instagram = $_GET['instagram'];
$work = $_GET['work'];
$pinned = $_GET['pinned'];
function calculate_age($birthdayDate) {
            $datetime = new DateTime($birthdayDate);
            $interval = $datetime->diff(new DateTime(date("Y-m-d")));
            return $interval->format("%Y");
}

 if(!empty($_GET)){
echo '<section class="table">';
echo '<table>';

require('validate/connect.php');
if(!$mysql->query("SELECT * FROM `employers`"))
     echo $mysql->error;
$result = $mysql->query("SELECT * FROM `employers`");
$number = 0;
if($_GET['number'] != ''){
$i = $_GET['number'];
}
while ( $row = mysqli_fetch_assoc( $result ) ) {
$birth = calculate_age($row['Birth']);
if(($row['Name'] == $name or $name == '') 
and ($row['Surname'] == $surname or $surname == '') 
and ($row['Lastname'] == $lastname or $lastname == '') 
and (($birth >= $birth_min or $birth_min == '') and ($birth <= $birth_max or $birth_max == '')) 
and ($row['Sex'] == $sex or $sex == '') 
and ($row['City'] == $city or $city == '') 
and ($row['Tel'] == $tel or $tel == '') 
and ($row['Email'] == $email or $email == '') 
and ($row['Social'] == $social or $social == '') 
and ($row['VK'] == $vk or $vk == '') 
and ($row['Instagram'] == $instagram or $instagram == '') 
and ($row['Work'] == $work or $work == '') 
and ($row['pinned'] == $pinned or $pinned == '')){
if($number == 0){echo '<tr><th>ФИО</th><th>Образование</th><th>Должность</th><th>Город</th><th>Соц. сеть</th><th>Файлы</th><th>Редактирование</th></tr>';}
if($number >= ($page-1)*5 and $number <= $page*5-1){
?>

<tr id="<?php print_r($row['id']); ?>"><td class="Name-table">
    <?php
    print_r( $row['Surname']);
    echo ' ';
    print_r( $row['Name'] );
    echo ' ';
    print_r( $row['Lastname'] ); 
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
 </td><td class="Resume-table">
        <div><a download href="../resume/<?php
        print_r($row['resume']);?>
        " >Резюме</a></div>
        <br><div><a download href="../testWork/<?php
        print_r($row['testWork']);?>
        " >Тестовое задание</a></div>

        </td><td id="rewrite" class="rewrite-table">
        <a target="_blank" class="direct alter-butt butt butt-table butt-table-1" href="../pages/reduct.php?id=<?php print_r($row['id']);?>" >Детали</a>
        <a id="fake-delete"  class="direct alter-butt butt butt-table butt-table-2 grey">Удалить</a>
        <a id="del" idb="<?php print_r($row['id']); ?>"   class="direct alter-butt butt butt-table butt-table-2 disabled butt-del">Удалить</a>
        <a  id="still-delete"  class="disabled alter-butt butt butt-table butt-table-3 " >Скрыть</a>
    </td>
 
</tr>
<?php

}
$number++; 
}
 }
 if($number == 0){echo '<h2 class="red">Записей с данными параметрами не существует</h2>';}
$mysql->close();

echo '</section>';
$pages = ceil(($number+5)/5);

echo '</table>';
for($i = 1; $i<$pages;$i++){
echo '<a class="pagin alter-butt butt" href="findPage.php?'.$all.'&page='.$i.'">'.$i.'</a>';
}
}
 ?>
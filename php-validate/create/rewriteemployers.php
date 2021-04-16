<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
$id = filter_var(trim($_POST['id']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
$lastname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
$birth = filter_var(trim($_POST['birth']), FILTER_SANITIZE_STRING);
$sex = filter_var(trim($_POST['sex']), FILTER_SANITIZE_STRING);
$city = filter_var(trim($_POST['city']), FILTER_SANITIZE_STRING);
$tel = filter_var(trim($_POST['tel']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$social = filter_var(trim($_POST['social']), FILTER_SANITIZE_STRING);
$meetday = filter_var(trim($_POST['meetday']), FILTER_SANITIZE_STRING);
$testtime = filter_var(trim($_POST['testtime']), FILTER_SANITIZE_STRING);
$datevacantion = filter_var(trim($_POST['datevacantion']), FILTER_SANITIZE_STRING);
$comment = filter_var(trim($_POST['comment']), FILTER_SANITIZE_STRING);
$vk = filter_var(trim($_POST['vk']), FILTER_SANITIZE_STRING);
$instagram = filter_var(trim($_POST['instagram']), FILTER_SANITIZE_STRING);
$work = filter_var(trim($_POST['work']), FILTER_SANITIZE_STRING);
$educatePlace = filter_var(trim($_POST['educatePlace']), FILTER_SANITIZE_STRING);
$pinned = filter_var(trim($_POST['pinned']), FILTER_SANITIZE_STRING);

if($_FILES["resume"]["name"] != null){
$resume = $_FILES["resume"]["size"].'-'.$_FILES["resume"]["name"];

if(is_uploaded_file($_FILES["resume"]["tmp_name"]))
   {
     move_uploaded_file($_FILES["resume"]["tmp_name"], "../../resume/" . $resume);
   } else {
      echo("Ошибка загрузки резюме");
   }
   }
   if($_FILES["testpdf"]["name"] != null){
   $testpdf = $_FILES["testpdf"]["size"].'-'.$_FILES["testpdf"]["name"];
if(is_uploaded_file($_FILES["testpdf"]["tmp_name"]))
   {
     move_uploaded_file($_FILES["testpdf"]["tmp_name"], "../../testWork/" . $testpdf );
   } else {
      echo("Ошибка загрузки тестового задания");

   }

}

require('../validate/connect.php');
$login = $_SESSION['logint'];
$mysql->query("INSERT INTO `$id` (`Name` , `Surname`,
                                        `Lastname` , `Sex`,
                                        `Birth` ,
                                        `City` , `Tel`,
                                        `Email` , `Social`,
                                        `Meetday` , `Testtime`,
                                        `Datevacantion` , `Comment`,
                                        `resume` , `testWork`,
                                        `vk` , `instagram`,
                                        `Work` , `EducatePlace`, `pinned`, `Login`)
VALUES('$name','$surname',
       '$lastname','$sex',
       '$birth',
       '$city','$tel',
       '$email','$social',
       '$meetday','$testtime',
       '$datevacantion','$comment',
       '$resume','$testpdf',
       '$vk','$instagram',
       '$work','$educatePlace', '$pinned', '$login') ");
$mysql->query("UPDATE `employers` SET `Name` = '$name' , `Surname` = '$surname',
                                        `Lastname` = '$lastname' , `Sex` = '$sex',
                                        `Birth` = '$birth' ,
                                        `City` = '$city' , `Tel` = '$tel',
                                        `Email` = '$email' , `Social` = '$social',
                                        `Meetday` = '$meetday' , `Testtime` = '$testtime',
                                        `Datevacantion` = '$datevacantion' , `Comment` = '$comment',
                                        `vk` = '$vk' , `instagram` = '$instagram',
                                        `Work` = '$work' , `EducatePlace` = '$educatePlace', `pinned` = '$pinned'  WHERE `id` = '$id' ");


if($_FILES["resume"]["name"] != null){
$mysql->query("UPDATE `employers` SET `resume` = '$resume' WHERE `id` = '$id'  ");
}
if($_FILES["testpdf"]["name"] != null){
$mysql->query("UPDATE `employers` SET `testWork` = '$testpdf' WHERE `id` = '$id'  ");
}

$mysql->close();
header('Location:/pages/reduct.php?id='.$id.'&rewrite=1');
?>
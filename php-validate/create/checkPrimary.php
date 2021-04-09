<?php
    //Добавляем файл подключения к БД
    $mysql = new mysqli('localhost', 'sila', 'test', 'admin');
    mysqli_set_charset($mysql, 'utf8');
     
    if(isset($_POST["email"])) {
 
        $email =  trim($_POST["email"]);
 
        $email = htmlspecialchars($email, ENT_QUOTES);
 
        //Проверяем, нет ли уже такого адреса в БД.
        $result_query = $mysqli->query("SELECT `email` FROM `employers` WHERE `email`='".$email."'");
         
        //Если кол-во полученных строк ровно единице, значит, пользователь с таким почтовым адресом уже зарегистрирован
        if($result_query->num_rows == 1){
 
            echo "<span class='mesage_error'>Такая почта уже имеется</span>";
 
        }
 
        // закрытие выборки
        $result_query->close();

    }
    $mysql->close();
?>
<?php
    //��������� ���� ����������� � ��
    $mysql = new mysqli('localhost', 'sila', 'test', 'admin');
    mysqli_set_charset($mysql, 'utf8');
     
    if(isset($_POST["email"])) {
 
        $email =  trim($_POST["email"]);
 
        $email = htmlspecialchars($email, ENT_QUOTES);
 
        //���������, ��� �� ��� ������ ������ � ��.
        $result_query = $mysqli->query("SELECT `email` FROM `employers` WHERE `email`='".$email."'");
         
        //���� ���-�� ���������� ����� ����� �������, ������, ������������ � ����� �������� ������� ��� ���������������
        if($result_query->num_rows == 1){
 
            echo "<span class='mesage_error'>����� ����� ��� �������</span>";
 
        }
 
        // �������� �������
        $result_query->close();

    }
    $mysql->close();
?>
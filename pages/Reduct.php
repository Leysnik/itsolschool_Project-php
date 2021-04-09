<?php 
require('../php-validate/validate/session.php');
$id = $_GET[ 'id' ];
 require('../php-validate/validate/connect.php');
if(!$mysql->query("SELECT * FROM `employers`"))
     echo $mysql->error;
$result = $mysql->query("SELECT * FROM `employers` WHERE id = '$id'");
$row = mysqli_fetch_assoc( $result);
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php print_r($row['Surname'].' '.$row['Name'].' '.$row['Lastname']); ?></title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../img/icon.png" type="image/png">
</head>
<body>
                    <?php
        require('../pages/header.php');      

 ?>
    <main>
                <?php
        
      require('../php-validate/rewrite.php');  
 ?>


        </main>
        <script src="../scripts/handleFile.js"></script>  
</body>
</html>
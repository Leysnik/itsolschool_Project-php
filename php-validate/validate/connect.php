<?php
require('session.php');
//$dbhost, $dbuser, $dbpass,$dbname
$mysql = new mysqli('', '', '', '');
mysqli_set_charset($mysql, 'utf8');
?>
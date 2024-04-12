<?php
require('session.php');
require("../../config.php");
$mysql = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
mysqli_set_charset($mysql, 'utf8');
?>
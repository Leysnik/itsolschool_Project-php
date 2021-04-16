<?php 
require('../php-validate/validate/session.php');
?>
	<!DOCTYPE HTML>
	<html lang="ru">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Поиск резюме</title>
		<link rel="stylesheet" href="../css/style.css">
		<link rel="shortcut icon" href="../img/icon.png" type="image/png"> </head>

	<body>
		<?php
        require('../pages/header.php');      

 ?>
			<main>
				<?php
        
      require('../php-validate/find-p.php');  
      require('../php-validate/find.php');  
 ?>
			</main>
			<script src="../scripts/checkNew-del.js"></script>
			<script src="../scripts/plusMore.js"></script>
	</body>

	</html>
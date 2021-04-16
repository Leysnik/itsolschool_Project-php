<header>
	<div>
		<?php if(isset($checkNav)): ?>
			<nav class="navigate"><a href="../" class="butt h-butt direct">Главная</a></nav>
	</div>
	<?php endif; ?>
		<?php
        if ($_COOKIE['user']!=''):
        echo '<div class="login"><span>';
      print_r($_SESSION['loginb']);
        echo '</span>';?> <a class="butt direct exit" href="../php-validate/validate/exit.php">Выйти</a>
			<?php endif; ?>
</header>
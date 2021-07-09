<header class="flex-container-2 space-between">
	<?php
	
        if ($_COOKIE['user']!=''): ?>
	<div>

			<nav class="navigate"><a href="../" class="butt h-butt direct">Главная</a></nav>
	</div>

		<div>
			<?php
        echo '<div class=" butt h-butt login"><span class="normal">';
      print_r($_SESSION['loginb']);
        echo '</span>';?> <a class="direct exit" href="../php-validate/validate/exit.php">Выйти</a></div>
			<?php endif; ?>
		</div>
</header>
<section class="main flex-container">
	<h2 class="normal">База данных <br> сотрудников</h2> <span class="butt step2-butt"><a class="direct" href="pages/createPage.php">Создать новое резюме</a></span> <span class="butt step2-butt"><a class="direct" href="pages/findPage.php">Посмотреть резюме по параметрам</a></span>
	<?php 
    if($_SESSION['grant']):
    ?> <span class="butt step2-butt"><a class="direct" href="pages/createAccount.php">Пользователи</a></span> <span class="butt step2-butt"><a class="direct" href="pages/createWork.php">Должности</a></span>
		<?php endif; ?>
</section>
<section class="main">
    <h2>База данных сотрудников</h2>
   
    
    <span class="butt step2-butt"><a class="direct" href="pages/createPage.php">Создать новое резюме</a></span>

    <span class="butt step2-butt"><a class="direct" href="pages/findPage.php">Посмотреть резюме по параметрам</a></span>
   <?php 
    if($_SESSION['grant']):
    ?>
    <span class="butt step2-butt"><a class="direct" href="pages/createAccount.php">Пользователи</a></span>
    <?php endif; ?>
</section>
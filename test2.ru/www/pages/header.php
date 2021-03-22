<header>

    <div class="login">
        <?php
        if ($_COOKIE['user']!=''):      
      echo $_SESSION['loginb'];?>
         <form action="../php-validate/validate/exit.php"><button type="submit">Выйти</button></form>
          <?php endif; ?>
        </div>
    </header>
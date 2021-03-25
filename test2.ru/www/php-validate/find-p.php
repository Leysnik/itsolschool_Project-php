<?php 
$name = $_GET['name'];
$surname = $_GET['surname'];
$lastname = $_GET['lastname'];
$birth_min = $_GET['birth_min'];
$birth_max = $_GET['birth_max'];
$sex = $_GET['sex'];
$city = $_GET['city'];
$tel = $_GET['tel'];
$email = $_GET['email'];
$social = $_GET['social'];
$vk = $_GET['vk'];
$instagram = $_GET['instagram'];
$work = $_GET['work'];
$pinned = $_GET['pinned'];

?> 
<section id="propt" datset="<?php echo $all; ?>" class="flex-container">
    <h1 id="main">Поиск резюме</h1>
<form action="../pages/findPage.php" method="get" class="flex-container">
    <div class="flex-container-2">
    <div class="flex-container row">
    <div class="flex-container">
        <label >Имя</label>
    <input type="text" name="name" class="text-field_prof" value="<?php echo $name;?>" placeholder="Иван" >
        </div>
        <div class="flex-container">
        <label >Фамилия</label>
    <input type="text" name="surname" class="text-field_prof" value="<?php echo $surname;?>" placeholder="Иванов">
                    </div>
        <div class="flex-container">
        <label >Отчество(при наличии)</label>
    <input type="text" name="lastname" class="text-field_prof" value="<?php echo $lastname;?>" placeholder="Иванович">
            </div>
        </div>
        <div class="flex-container row">
        <div class="flex-container sex">
        <label >Пол</label>
    <select  placeholder="Пол" name="sex" class="text-field_prof text-select">
    <option class="disabled" ><?php echo $sex;?></option>
    <option >Мужской</option>
    <option >Женский</option> 
    </select>
                    </div>
    <div class="flex-container">
        <label >Возраст</label>
        <div>
    <input type="number" name="birth_min" class="text-field_prof number" value="<?php echo $birth_min;?>" placeholder="min" min="18" >-
        <input type="number" name="birth_max" class="text-field_prof number" value="<?php echo $birth_max;?>" placeholder="max" min="18" >
    </div>
        </div>
          
 

        <div class="flex-container">
        <label >Город</label>
    <input type="text" name="city" class="text-field_prof" value="<?php echo $city;?>" placeholder="Самара" >
                    </div>
            </div>

        <div class="flex-container row">          
        <div class="flex-container">
        <label >Должность</label>
    <input type="text" name="work" class="text-field_prof correct-t" value="<?php echo $work;?>" placeholder="Дизайнер" >
                    </div>

            </div>
        

        <div class="flex-container row">
        <div class="flex-container">
        <label >Телефон</label>
    <input type="tel" name="tel" id="tel" class="text-field_prof" value="<?php echo $tel;?>" placeholder="88005553535" >
                    </div>
        <div class="flex-container">
        <label >Email</label>
    <input type="email" id="email" name="email" class="text-field_prof" value="<?php echo $email;?>" placeholder="anton_pk@gmail.com">
                    </div>
      </div>
      </div>

    <br>
    <div class="flex-container-2">
        <div class="flex-container">
        <label >VK</label>
    <input type="text" name="vk"  class="text-field_prof" value="<?php echo $vk;?>" placeholder="https://vk.com/xxxx">
                    </div>
        <div class="flex-container">
        <label >INSTAGRAM</label>
    <input type="text" name="instagram" class="text-field_prof" value="<?php echo $instagram;?>" placeholder="https://www.instagram.com/xxxxx">
                    </div>
        <div class="flex-container">
        <label >HeadHunter</label>
    <input type="text" name="social" class="text-field_prof" value="<?php echo $social;?>" placeholder="https://hh.ru/vacancy/xxxxx">  
                    </div>
      </div>
            <div class="flex-container-2 pinned-container">
        <label class="pinned" for="pinned">Избранное</label>
        <input id="pinned" type="checkbox" name="pinned" value="1" <?php if($pinned == 1){echo 'checked';}?>>
        </div>
    <div class="flex-container-2">
    <input id="create" type="submit" class="alter-butt butt " value="Поиск" >
        
        </div>
    <div class="flex-container-2"><a class="alter-butt butt decor" href="findPage.php">Сбросить</a></div>
</form>
   
</section>
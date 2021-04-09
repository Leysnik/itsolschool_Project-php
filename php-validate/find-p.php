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
$page = $_GET['page'];
if($_GET['page'] == ''){$page = 1;}

$all = 'name='.$name.'&surname='.$surname.'&lastname='.$lastname.'&birth_min='.$birth_min.'&birth_max='.$birth_max.'&sex='.$sex.'&city='.$city.'&tel='.$tel.'&email='.$email.'&social='.$social.'&vk='.$vk.'&instagram='.$instagram.'&work='.$work.'&pinned='.$pinned;
?> 
<section id="propt" datset="<?php echo $all; ?>" class="flex-container">
    <h1 id="main">Поиск резюме</h1>
<form action="../pages/findPage.php" method="get" class="flex-container">
    <div class="flex-container-2">
    <div class="flex-container row">
    <div class="flex-container">
        <input type="text" class="disable" value="<?php print_r($page); ?>">
        <label >Имя</label>
    <input type="text" name="name" class="text-field_prof" value="<?php echo $name;?>">
        </div>
        <div class="flex-container">
        <label >Фамилия</label>
    <input type="text" name="surname" class="text-field_prof" value="<?php echo $surname;?>" >
                    </div>
        <div class="flex-container">
        <label >Отчество(при наличии)</label>
    <input type="text" name="lastname" class="text-field_prof" value="<?php echo $lastname;?>" >
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
    <input type="number" name="birth_min" class="text-field_prof number" value="<?php echo $birth_min;?>" placeholder="min" min="16" max="100">-
        <input type="number" name="birth_max" class="text-field_prof number" value="<?php echo $birth_max;?>" placeholder="max" min="16" max="100" >
    </div>
        </div>
          
 

        <div class="flex-container">
        <label >Город</label>
    <input type="text" name="city" class="text-field_prof" value="<?php echo $city;?>"  >
                    </div>
            </div>

        <div class="flex-container row">          
        <div class="flex-container">
        <label >Должность</label>
        <select type="text" name="work" class="text-field_prof correct-t text-select" value=""  >
        <?php 
            echo '<option>'.$work.'</option>';
        
                        require('../php-validate/validate/connect.php');
                $result = $mysql->query("SELECT * FROM `work`");
                while ( $row = mysqli_fetch_assoc( $result ) ) {
                if($row['Work'] != $work){
        echo '<option>';
        print_r($row['Work']);
        echo '</option>';
        }
        }
        ?>
    </select>
                    </div>

            </div>
        

        <div class="flex-container row">
        <div class="flex-container">
        <label >Телефон</label>
    <input type="tel" name="tel" id="tel" class="text-field_prof" value="<?php echo $tel;?>"  >
                    </div>
        <div class="flex-container">
        <label >Email</label>
    <input type="email" id="email" name="email" class="text-field_prof" value="<?php echo $email;?>" >
                    </div>
      </div>
      </div>

    <br>
    <div class="flex-container-2">
        <div class="flex-container">
        <label >VK</label>
    <input type="text" name="vk"  class="text-field_prof" value="<?php echo $vk;?>" >
                    </div>
        <div class="flex-container">
        <label >INSTAGRAM</label>
    <input type="text" name="instagram" class="text-field_prof" value="<?php echo $instagram;?>" >
                    </div>
        <div class="flex-container">
        <label >HeadHunter</label>
    <input type="text" name="social" class="text-field_prof" value="<?php echo $social;?>" >  
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
   <div class="disable all"><?php print_r($all); ?></div>
</section>
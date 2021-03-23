<?php
$id = $_GET[ 'id' ];
 require('validate/connect.php');
if(!$mysql->query("SELECT * FROM `employers`"))
     echo $mysql->error;
$result = $mysql->query("SELECT * FROM `employers` WHERE id = '$id'");
$row = mysqli_fetch_assoc( $result);
?>
<section class="flex-container">
    <h1 id="main">Редактировать резюме</h1>
<form action="../php-validate/create/rewriteemployers.php" method="post" enctype="multipart/form-data" class="flex-container">
    <input type="text" name="id" class="text-field_prof disabled" value="<?php echo $id;?>" >
    <div class="flex-container-2">
    <div class="flex-container row">
    <div class="flex-container">
        <label >Имя</label>
    <input type="text" name="name" class="text-field_prof" value="<?php print_r($row['Name']);?>" placeholder="Имя" required>
        </div>
        <div class="flex-container">
        <label >Фамилия</label>
    <input type="text" name="surname" class="text-field_prof" value="<?php print_r($row['Surname']);?>" placeholder="Фамилия" required>
                    </div>
        <div class="flex-container">
        <label >Отчество(при наличии)</label>
    <input type="text" name="lastname" class="text-field_prof" value="<?php print_r($row['Lastname']);?>" placeholder="Отчество(при наличии)">
            </div>
        </div>
        <div class="flex-container row">
        <div class="flex-container sex">
        <label >Пол</label>
    <select required placeholder="Пол" name="sex" class="text-field_prof text-select">
    <option class="disable" ><?php print_r($row['Sex']);?></option>
    <option >Мужской</option>
    <option >Женский</option> 
    </select>
                    </div>
    <div class="flex-container">
        <label >Дата рождения</label>
    <input type="date" name="birth" class="text-field_prof" value="<?php print_r($row['Birth']);?>" placeholder="Дата рождения" required>
    </div>
          
 

        <div class="flex-container">
        <label >Город</label>
    <input type="text" name="city" class="text-field_prof" value="<?php print_r($row['City']);?>" placeholder="Город" required>
                    </div>
            </div>

        <div class="flex-container row">
        <div class="flex-container sex">
        <label >Образование</label>
    <select required placeholder="Образование" name="education" class="text-field_prof text-select">
        <option class="disable"><?php print_r($row['Education']);?></option>
    <option >Начальное образование</option>
    <option >Среднее общее образование</option>
    <option >Среднее полное образование</option> 
    <option >Среднее профессиональное образование</option>
    <option >Бакалавриат высшего образования</option> 
    <option >Магистратура</option> 
    </select>
                    </div>
    <div class="flex-container">
        <label >Места обучения</label>
    <textarea name="educatePlace" class="text-field_prof" value="" placeholder="Места обучения" required><?php print_r($row['EducatePlace']);?></textarea>
    </div>
          
        <div class="flex-container">
        <label >Должность</label>
    <input type="text" name="work" class="text-field_prof correct-t" value="<?php print_r($row['Work']);?>" placeholder="Должность" >
                    </div>

            </div>
        

        <div class="flex-container row">
        <div class="flex-container">
        <label >Телефон</label>
    <input type="tel" name="tel" id="tel" class="text-field_prof" value="<?php print_r($row['Tel']);?>" placeholder="Телефон" required>
                    </div>
        <div class="flex-container">
        <label >Email</label>
    <input type="email" id="email" name="email" class="text-field_prof" value="<?php print_r($row['Email']);?>" placeholder="Email">
                    </div>
      </div>





  

        <div class="flex-container row">
  
    <div class="flex-container correct-t ">
        <label >Дата собеседования</label>
    <input type="date" id="meetday" name="meetday" class="date" value="<?php print_r($row['Meetday']);?>" placeholder="Дата собеседования" required>
    </div>
    
    <div class="flex-container correct-t ">
        <label>Дата стажировки</label>
      
    <input type="date" id="testtime" name="testtime" class="date" value="<?php print_r($row['Testtime']);?>" placeholder="Дата стажировки" required>
    </div>
    <div class="flex-container correct-t ">
        <label>Дата размещения вакансии</label>
    <input type="date" id="datevacantion" name="datevacantion" class="date" value="<?php print_r($row['Datevacantion']);?>" placeholder="Дата размещения вакансии">
    </div >
            </div>
      </div>

    <br>
    <div class="flex-container-2">
        <div class="flex-container">
        <label >VK</label>
    <input type="text" name="vk"  class="text-field_prof" value="<?php print_r($row['VK']);?>" placeholder="Вконтакте">
                    </div>
        <div class="flex-container">
        <label >INSTAGRAM</label>
    <input type="text" name="instagram" class="text-field_prof" value="<?php print_r($row['Instagram']);?>" placeholder="Инстаграм">
                    </div>
        <div class="flex-container">
        <label >Дополнительная соц. сеть</label>
    <input type="text" name="social" class="text-field_prof" value="<?php print_r($row['Social']);?>" placeholder="Дополнительная соц. сеть">  
                    </div>
      </div>

    <div class="flex-container send">
    <div class="send-container">
    <label for="resume" class="file-create">Резюме</label>
    <input id="resume" type="file" name="resume" class="send-field_prof disabled" value="">
    </div>
  
    
    <div class="send-container">
        <label for="testpdf" class="file-create">Тестовое задание</label>
    <input id="testpdf" type="file" name="testpdf" class="send-field_prof disabled" value="">
    </div>
        </div>
   
        <div class="flex-container">
        <label >Комментарий</label>
    <textarea type="text" name="comment" class="text-field_prof" value="" placeholder="Комментарий"><?php print_r($row['Comment']);?></textarea>
            </div>
         <div class="position-r-2">
        <label for="pinned">В избранное</label>
        <input id="pinned" type="checkbox" name="pinned" value="1"<?php if($row['pinned'] == 1){echo 'checked';}?>>
        </div>
    <input id="create" type="submit" class="alter-butt butt position-r" value="Обновить" >
</form>
</section>
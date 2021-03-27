<section class="flex-container">
    <h1 id="main">Редактировать резюме</h1>
    <?php if($_GET['rewrite'] == 1){echo '<h2>Обновлено</h2>';}?>
<form action="../php-validate/create/rewriteemployers.php" method="post" enctype="multipart/form-data" class="flex-container">
    <input type="text" name="id" class="text-field_prof disabled" value="<?php echo $id;?>" >
    <div class="flex-container-2">
    <div class="flex-container row">
    <div class="flex-container">
        <label >Имя</label>
    <input type="text" name="name" class="text-field_prof" value="<?php print_r($row['Name']);?>"  required>
        </div>
        <div class="flex-container">
        <label >Фамилия</label>
    <input type="text" name="surname" class="text-field_prof" value="<?php print_r($row['Surname']);?>"  required>
                    </div>
        <div class="flex-container">
        <label >Отчество(при наличии)</label>
    <input type="text" name="lastname" class="text-field_prof" value="<?php print_r($row['Lastname']);?>" >
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
    <input type="date" name="birth" class="text-field_prof" value="<?php print_r($row['Birth']);?>"  required>
    </div>
          
 

        <div class="flex-container">
        <label >Город</label>
    <input type="text" name="city" class="text-field_prof" value="<?php print_r($row['City']);?>"  required>
                    </div>
            </div>

        <div class="flex-container row">

    <div class="flex-container">
        <label >Образование</label>
    <textarea name="educatePlace" class="textarea text-field_prof" value="" placeholder="Образование" required><?php print_r($row['EducatePlace']);?></textarea>
    </div>
          
        <div class="flex-container">
        <label >Должность</label>
    <input type="text" name="work" class="text-field_prof correct-t" value="<?php print_r($row['Work']);?>"  >
                    </div>

            </div>
        

        <div class="flex-container row">
        <div class="flex-container">
        <label >Телефон</label>
    <input type="tel" name="tel" id="tel" class="text-field_prof" value="<?php print_r($row['Tel']);?>"  required>
                    </div>
        <div class="flex-container">
        <label >Email</label>
    <input type="email" id="email" name="email" class="text-field_prof" value="<?php print_r($row['Email']);?>" >
                    </div>
      </div>





  

        <div class="flex-container row">
  
    <div class="flex-container correct-t ">
        <label >Дата собеседования</label>
    <input type="date" id="meetday" name="meetday" class="date" value="<?php print_r($row['Meetday']);?>"  required>
    </div>
    
    <div class="flex-container correct-t ">
        <label>Дата стажировки</label>
      
    <input type="date" id="testtime" name="testtime" class="date" value="<?php print_r($row['Testtime']);?>" >
    </div>
    <div class="flex-container correct-t ">
        <label>Дата размещения вакансии</label>
    <input type="date" id="datevacantion" name="datevacantion" class="date" value="<?php print_r($row['Datevacantion']);?>" >
    </div >
            </div>
      </div>

    <br>
    <div class="flex-container-2">
        <div class="flex-container">
        <label >VK</label>
    <input type="text" name="vk"  class="text-field_prof" value="<?php print_r($row['VK']);?>" >
                    </div>
        <div class="flex-container">
        <label >INSTAGRAM</label>
    <input type="text" name="instagram" class="text-field_prof" value="<?php print_r($row['Instagram']);?>" >
                    </div>
        <div class="flex-container">
        <label >HeadHunter</label>
    <input type="text" name="social" class="text-field_prof" value="<?php print_r($row['Social']);?>" >  
                    </div>
      </div>


    <div class="flex-container send">
    <div class="send-container">
    <label for="resume" class="file-create">Резюме</label>
        <br>
    <input id="resume" type="file" name="resume" class="send-field_prof" onchange="Filevalidation()" value="">
        <img src="../img/Feedbin-Icon-check.svg.png" alt="" class="disable d-img"> 
    </div>
  
    
    <div class="send-container">
        <label for="testpdf" class="file-create">Тестовое задание</label>
        <br>
    <input id="testpdf" type="file" name="testpdf" class="send-field_prof" onchange="Filevalidation()" value="" >
        <img src="../img/Feedbin-Icon-check.svg.png" alt="" class="disable d-img"> 
    </div>
        </div>
   
        <div class="flex-container">
        <label >Комментарий</label>
    <textarea  type="text" name="comment" class="textarea text-field_prof" value="" ><?php print_r($row['Comment']);?></textarea>
            </div>
         <div class="position-r-2">
        <label for="pinned">В избранное</label>
        <input id="pinned" type="checkbox" name="pinned" value="1"<?php if($row['pinned'] == 1){echo 'checked';}?>>
        </div>
    <input id="create" type="submit" class="alter-butt butt position-r" value="Обновить" >
</form>
</section>
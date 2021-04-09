<section class="flex-container">
    <h1 id="main">Создать резюме</h1>
    <?php if($_GET['create'] == 1){ echo '<h2>Запись создана</h2>'; }  ?>
<form action="../php-validate/create/addemployers.php" method="post" enctype="multipart/form-data" class="flex-container">
    <div class="flex-container-2">
    <div class="flex-container row">
    <div class="flex-container">
        <label >Имя<span class="red">*</span></label>
    <input type="text" name="name" class="text-field_prof" value=""  required>
        </div>
        <div class="flex-container">
        <label >Фамилия<span class="red">*</span></label>
    <input type="text" name="surname" class="text-field_prof" value=""  required>
                    </div>
        <div class="flex-container">
        <label >Отчество(при наличии)</label>
    <input type="text" name="lastname" class="text-field_prof" value="" >
            </div>
        </div>
        <div class="flex-container row">
        <div class="flex-container sex">
        <label >Пол<span class="red">*</span></label>
    <select required placeholder="Пол" name="sex" class="text-field_prof text-select">
    <option ></option>
    <option >Мужской</option>
    <option >Женский</option> 
    </select>
                    </div>
    <div class="flex-container">
        <label >Дата рождения<span class="red">*</span></label>
    <input type="date" name="birth" class="text-field_prof" value="" min="<?php print_r(date('Y')-100);?>-01-01" max="<?php print_r(date('Y')-16);?>-01-01" required>
    </div>
          
 

        <div class="flex-container">
        <label >Город<span class="red">*</span></label>
    <input type="text" name="city" class="text-field_prof" value=""  required>
                    </div>
            </div>

        <div class="flex-container row">
    <div class="flex-container">
        <label >Образование<span class="red">*</span></label>
    <textarea name="educatePlace" class="textarea text-field_prof" value=""  required>
</textarea>
    </div>
          
        <div class="flex-container">
        <label >Должность</label>
    <select type="text" name="work" class="text-field_prof correct-t text-select" value=""  >
        <option></option>
        <?php 
                        require('../php-validate/validate/connect.php');
                $result = $mysql->query("SELECT * FROM `work`");
                while ( $row = mysqli_fetch_assoc( $result ) ) {
        echo '<option>';
        print_r($row['Work']);
        echo '</option>';
        }
        ?>
    </select>
                    </div>

            </div>
        

        <div class="flex-container row">
        <div class="flex-container">
        <label >Телефон<span class="red">*</span></label>
    <input type="tel" name="tel" id="tel" class="text-field_prof" value=""  required>
            <div id="tel-d" class="red disable">Предупреждение:<br>Такой телефон уже есть в базе</div>
                    </div>
        <div class="flex-container">
        <label >Email</label>
    <input type="email" id="email" name="email" class="text-field_prof" value="" >
        <div class="red disable" id="email-d">Предупреждение:<br>Такая почта уже есть в базе</div>            
        </div>
      </div>





  

        <div class="flex-container row">
  
    <div class="flex-container correct-t ">
        <label >Дата собеседования<span class="red">*</span></label>
    <input type="date" id="meetday" name="meetday" class="date" value="" min="<?php print_r(date('Y')-20);?>-01-01" max="<?php print_r(date('Y-m-d'));?>"  required>
    </div>
    
    <div class="flex-container correct-t ">
        <label>Дата стажировки</label>
      
    <input type="date" id="testtime" name="testtime" class="date" value="" min="<?php print_r(date('Y')-20);?>-01-01" max="<?php print_r(date('Y-m-d'));?>" >
    </div>
    <div class="flex-container correct-t ">
        <label>Дата размещения вакансии<span class="red">*</span></label>
    <input type="date" id="datevacantion" name="datevacantion" class="date" value="" min="<?php print_r(date('Y')-20);?>-01-01" max="<?php print_r(date('Y-m-d'));?>" required >
    </div >
            </div>
      </div>

    <br>
    <div class="flex-container-2">
        <div class="flex-container">
        <label >VK</label>
    <input type="text" name="vk" id="vk"  class="text-field_prof" value="" >
            <div id="vk-d" class="red disable">Предупреждение:<br>Такая соц. сеть уже есть в базе</div>
                    </div>
        <div class="flex-container">
        <label >INSTAGRAM</label>
    <input type="text" name="instagram" id="instagram" class="text-field_prof" value="" >
        <div id="instagram-d" class="red disable">Предупреждение:<br>Такая соц. сеть уже есть в базе</div>            
        </div>
        <div class="flex-container">
        <label >HeadHunter</label>
    <input type="text" name="social" id="social" class="text-field_prof" value="" >  
        <div id="social-d" class="red disable">Предупреждение:<br>Такая соц. сеть уже есть в базе</div>            
        </div>
      </div>

    <div class="flex-container send">
    <div class="send-container">
    <label for="resume" class="file-create">Резюме<span class="red">*</span></label>
        <br>
    <input id="resume" type="file" name="resume" class="send-field_prof" onchange="Filevalidation()" value=""  required>
        <img src="../../img/Feedbin-Icon-check.svg.png" alt="" class="disable d-img"> 
    </div>
  
    
    <div class="send-container">
        <label for="testpdf" class="file-create">Тестовое задание<span class="red">*</span></label>
        <br>
    <input id="testpdf" type="file" name="testpdf" class="send-field_prof" value="" onchange="Filevalidation()"  required>
        <img src="../../img/Feedbin-Icon-check.svg.png" alt="" class="disable d-img"> 
    </div>
        </div>
   
        <div class="flex-container">
        <label >Комментарий</label>
    <textarea type="text" name="comment" class="textarea text-field_prof width" value="" ></textarea>
            </div>
        <div class="position-r-2">
        <label for="pinned">В избранное</label>
        <input id="pinned" type="checkbox" name="pinned" value="1">
        </div>
    <div class="position-r">
    <input id="next" type="button"  class="alter-butt butt" value="Дальше">
    <input id="create" type="submit" class="alter-butt butt disable" value="Создать" >
        </div>
</form>

</section>
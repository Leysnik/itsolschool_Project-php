<section class="flex-container">
    <h1 id="main">Создать резюме</h1>
    <?php if($_GET['create'] == 1){ echo '<h2>Запись создана</h2>'; }  ?>
<form action="../php-validate/create/addemployers.php" method="post" enctype="multipart/form-data" class="flex-container">
    <div class="flex-container-2">
    <div class="flex-container row">
    <div class="flex-container">
        <label >Имя<span class="red">*</span></label>
    <input type="text" name="name" class="text-field_prof" value="" placeholder="Иван" required>
        </div>
        <div class="flex-container">
        <label >Фамилия<span class="red">*</span></label>
    <input type="text" name="surname" class="text-field_prof" value="" placeholder="Иванов" required>
                    </div>
        <div class="flex-container">
        <label >Отчество(при наличии)</label>
    <input type="text" name="lastname" class="text-field_prof" value="" placeholder="Иванович">
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
    <input type="date" name="birth" class="text-field_prof" value="" placeholder="1843-12-03" required>
    </div>
          
 

        <div class="flex-container">
        <label >Город<span class="red">*</span></label>
    <input type="text" name="city" class="text-field_prof" value="" placeholder="Самара" required>
                    </div>
            </div>

        <div class="flex-container row">
    <div class="flex-container">
        <label >Образование<span class="red">*</span></label>
    <textarea name="educatePlace" class="textarea text-field_prof" value="" placeholder="АПЭТ(среднее специальное образование)" required>
</textarea>
    </div>
          
        <div class="flex-container">
        <label >Должность</label>
    <input type="text" name="work" class="text-field_prof correct-t" value="" placeholder="Дизайнер" >
                    </div>

            </div>
        

        <div class="flex-container row">
        <div class="flex-container">
        <label >Телефон<span class="red">*</span></label>
    <input type="tel" name="tel" id="tel" class="text-field_prof" value="" placeholder="88005553535" required>
            <div id="tel-d" class="red disable">Предупреждение:<br>Такой телефон уже есть в базе</div>
                    </div>
        <div class="flex-container">
        <label >Email</label>
    <input type="email" id="email" name="email" class="text-field_prof" value="" placeholder="anton_pk@gmail.com">
        <div class="red disable" id="email-d">Предупреждение:<br>Такая почта уже есть в базе</div>            
        </div>
      </div>





  

        <div class="flex-container row">
  
    <div class="flex-container correct-t ">
        <label >Дата собеседования<span class="red">*</span></label>
    <input type="date" id="meetday" name="meetday" class="date" value="" placeholder="1843-12-03" required>
    </div>
    
    <div class="flex-container correct-t ">
        <label>Дата стажировки</label>
      
    <input type="date" id="testtime" name="testtime" class="date" value="" placeholder="1843-12-03">
    </div>
    <div class="flex-container correct-t ">
        <label>Дата размещения вакансии<span class="red">*</span></label>
    <input type="date" id="datevacantion" name="datevacantion" class="date" value="" placeholder="1843-12-03">
    </div >
            </div>
      </div>

    <br>
    <div class="flex-container-2">
        <div class="flex-container">
        <label >VK</label>
    <input type="text" name="vk" id="vk"  class="text-field_prof" value="" placeholder="https://vk.com/xxxx">
            <div id="vk-d" class="red disable">Предупреждение:<br>Такая соц. сеть уже есть в базе</div>
                    </div>
        <div class="flex-container">
        <label >INSTAGRAM</label>
    <input type="text" name="instagram" id="instagram" class="text-field_prof" value="" placeholder="https://www.instagram.com/xxxx">
        <div id="instagram-d" class="red disable">Предупреждение:<br>Такая соц. сеть уже есть в базе</div>            
        </div>
        <div class="flex-container">
        <label >HeadHunter</label>
    <input type="text" name="social" id="social" class="text-field_prof" value="" placeholder="https://hh.ru/vacancy/xxxxx">  
        <div id="social-d" class="red disable">Предупреждение:<br>Такая соц. сеть уже есть в базе</div>            
        </div>
      </div>

    <div class="flex-container send">
    <div class="send-container">
    <label for="resume" class="file-create">Резюме<span class="red">*</span></label>
        <br>
    <input id="resume" type="file" name="resume" class="send-field_prof" value=""  required>
    </div>
  
    
    <div class="send-container">
        <label for="testpdf" class="file-create">Тестовое задание<span class="red">*</span></label>
        <br>
    <input id="testpdf" type="file" name="testpdf" class="send-field_prof" value=""  required>
    </div>
        </div>
   
        <div class="flex-container">
        <label >Комментарий</label>
    <textarea type="text" name="comment" class="textarea text-field_prof" value="" placeholder="Комментарий о претенденте"></textarea>
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
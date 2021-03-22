<section class="flex-container">
    <h1 id="main">Создать резюме</h1>
<form action="../php-validate/create/addemployers.php" method="post" enctype="multipart/form-data" class="flex-container">
    <div class="flex-container-2">
    <div class="flex-container row">
    <div class="flex-container">
        <label >Имя</label>
    <input type="text" name="name" class="text-field_prof" value="" placeholder="Имя" required>
        </div>
        <div class="flex-container">
        <label >Фамилия</label>
    <input type="text" name="surname" class="text-field_prof" value="" placeholder="Фамилия" required>
                    </div>
        <div class="flex-container">
        <label >Отчество(при наличии)</label>
    <input type="text" name="lastname" class="text-field_prof" value="" placeholder="Отчество(при наличии)">
            </div>
        </div>
        <div class="flex-container row">
        <div class="flex-container sex">
        <label >Пол</label>
    <select required placeholder="Пол" name="sex" class="text-field_prof text-select">
    <option ></option>
    <option >Мужской</option>
    <option >Женский</option> 
    </select>
                    </div>
    <div class="flex-container">
        <label >Дата рождения</label>
    <input type="date" name="birth" class="text-field_prof" value="" placeholder="Дата рождения" required>
    </div>
          
 

        <div class="flex-container">
        <label >Город</label>
    <input type="text" name="city" class="text-field_prof" value="" placeholder="Город" required>
                    </div>
            </div>

        <div class="flex-container row">
        <div class="flex-container sex">
        <label >Образование</label>
    <select required placeholder="Образование" name="education" class="text-field_prof text-select">
        <option></option>
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
    <textarea name="educatePlace" class="text-field_prof" value="" placeholder="Места обучения" required>
</textarea>
    </div>
          
        <div class="flex-container">
        <label >Должность</label>
    <input type="text" name="work" class="text-field_prof correct-t" value="" placeholder="Должность" >
                    </div>

            </div>
        

        <div class="flex-container row">
        <div class="flex-container">
        <label >Телефон</label>
    <input type="tel" name="tel" id="tel" class="text-field_prof" value="" placeholder="Телефон" required>
            <div id="tel-d" class="red disable">Такой телефон уже есть в базе</div>
                    </div>
        <div class="flex-container">
        <label >Email</label>
    <input type="email" id="email" name="email" class="text-field_prof" value="" placeholder="Email">
        <div class="red disable" id="email-d">Такая почта уже есть в базе</div>            
        </div>
      </div>





  

        <div class="flex-container row">
  
    <div class="flex-container correct-t ">
        <label >Дата собеседования</label>
    <input type="date" id="meetday" name="meetday" class="date" value="" placeholder="Дата собеседования" required>
    </div>
    
    <div class="flex-container correct-t ">
        <label>Дата стажировки</label>
      
    <input type="date" id="testtime" name="testtime" class="date" value="" placeholder="Дата стажировки" required>
    </div>
    <div class="flex-container correct-t ">
        <label>Дата размещения вакансии</label>
    <input type="date" id="datevacantion" name="datevacantion" class="date" value="" placeholder="Дата размещения вакансии">
    </div >
            </div>
      </div>

    <br>
    <div class="flex-container-2">
        <div class="flex-container">
        <label >VK</label>
    <input type="text" name="vk" id="vk"  class="text-field_prof" value="" placeholder="Вконтакте">
            <div id="vk-d" class="red disable">Такой аккаунт уже есть в базе</div>
                    </div>
        <div class="flex-container">
        <label >INSTAGRAM</label>
    <input type="text" name="instagram" id="instagram" class="text-field_prof" value="" placeholder="Инстаграм">
        <div id="instagram-d" class="red disable">Такой аккаунт уже есть в базе</div>            
        </div>
        <div class="flex-container">
        <label >Дополнительная соц. сеть</label>
    <input type="text" name="social" id="social" class="text-field_prof" value="" placeholder="Дополнительная соц. сеть">  
        <div id="social-d" class="red disable">Такой аккаунт уже есть в базе</div>            
        </div>
      </div>

    <div class="flex-container send">
    <div class="send-container">
    <label for="resume" class="file-create">Резюме</label>
    <input id="resume" type="file" name="resume" class="send-field_prof disabled" value=""  required>
    </div>
  
    
    <div class="send-container">
        <label for="testpdf" class="file-create">Тестовое задание</label>
    <input id="testpdf" type="file" name="testpdf" class="send-field_prof disabled" value=""  required>
    </div>
        </div>
   
        <div class="flex-container">
        <label >Комментарий</label>
    <textarea type="text" name="comment" class="text-field_prof" value="" placeholder="Комментарий"></textarea>
            </div>
    <input id="next" type="button"  class="alter-butt butt position-r" value="Дальше">
    <input id="create" type="submit" class="alter-butt butt position-r disable" value="Создать" >
</form>

</section>
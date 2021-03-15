<section class="flex-container">
    <h1 id="main">Поиск резюме</h1>
<form action="../pages/findPage.php" method="post" enctype="multipart/form-data" class="flex-container">
    <div class="flex-container-2">
    <div class="flex-container row">
    <div class="flex-container">
        <label >Имя</label>
    <input type="text" name="name" class="text-field_prof" value="" placeholder="Имя" >
        </div>
        <div class="flex-container">
        <label >Фамилия</label>
    <input type="text" name="surname" class="text-field_prof" value="" placeholder="Фамилия">
                    </div>
        <div class="flex-container">
        <label >Отчество(при наличии)</label>
    <input type="text" name="lastname" class="text-field_prof" value="" placeholder="Отчество(при наличии)">
            </div>
        </div>
        <div class="flex-container row">
        <div class="flex-container sex">
        <label >Пол</label>
    <select  placeholder="Пол" name="sex" class="text-field_prof text-select">
    <option ></option>
    <option >Мужской</option>
    <option >Женский</option> 
    </select>
                    </div>
    <div class="flex-container">
        <label >Дата рождения</label>
    <input type="date" name="birth" class="text-field_prof" value="" placeholder="Дата рождения" >
    </div>
          
 

        <div class="flex-container">
        <label >Город</label>
    <input type="text" name="city" class="text-field_prof" value="" placeholder="Город" >
                    </div>
            </div>

        <div class="flex-container row">
        <div class="flex-container sex">
        <label >Образование</label>
    <select  placeholder="Образование" name="Education" class="text-field_prof text-select">
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
        <label >Должность</label>
    <input type="text" name="Work" class="text-field_prof correct-t" value="" placeholder="Должность" >
                    </div>

            </div>
        

        <div class="flex-container row">
        <div class="flex-container">
        <label >Телефон</label>
    <input type="tel" name="tel" id="tel" class="text-field_prof" value="" placeholder="Телефон" >
                    </div>
        <div class="flex-container">
        <label >Email</label>
    <input type="email" id="email" name="email" class="text-field_prof" value="" placeholder="Email">
                    </div>
      </div>





  

        <div class="flex-container row">
  
    <div class="flex-container correct-t ">
        <label >Дата собеседования</label>
    <input type="date" id="meetday" name="meetday" class="date" value="" placeholder="Дата собеседования" >
    </div>
    
    <div class="flex-container correct-t ">
        <label>Дата стажировки</label>
      
    <input type="date" id="testtime" name="testtime" class="date" value="" placeholder="Дата стажировки" >
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
    <input type="text" name="vk"  class="text-field_prof" value="" placeholder="Вконтакте">
                    </div>
        <div class="flex-container">
        <label >INSTAGRAM</label>
    <input type="text" name="instagram" class="text-field_prof" value="" placeholder="Инстаграм">
                    </div>
        <div class="flex-container">
        <label >Дополнительная соц. сеть</label>
    <input type="text" name="social" class="text-field_prof" value="" placeholder="Дополнительная соц. сеть">  
                    </div>
      </div>

   
    <input id="create" type="submit" class="alter-butt butt position-r" value="Поиск" >
</form>
</section>
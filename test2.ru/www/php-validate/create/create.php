<section class="">
    <h1 id="main">Создать резюме</h1>
<form action="../php-validate/create/addemployers.php" method="post" enctype="multipart/form-data">

    <input type="text" name="name" class="text-field_prof" value="" placeholder="Имя" required>
    <input type="text" name="surname" class="text-field_prof" value="" placeholder="Фамилия" required>
    <input type="text" name="lastname" class="text-field_prof" value="" placeholder="Отчество(при наличии)">
    
    <select required placeholder="Пол" name="sex" class="text-field_prof text-select">
    <option >Пол</option>
    <option >Мужской</option>
    <option >Женский</option> 
    </select>
    <br>
    <span class="date-container">
        <label class="date-create">Дата рождения</label>
    <input type="date" name="birth" class="text-field_prof" value="" placeholder="Дата рождения" required>
    </span>
    <input type="text" name="education" class="text-field_prof" value="" placeholder="Образование" >
    <input type="text" name="city" class="text-field_prof" value="" placeholder="Город" required>
    <input type="tel" name="tel" class="text-field_prof" value="" placeholder="Телефон" required>
    <input type="email" name="email" class="text-field_prof" value="" placeholder="Email">
    <input type="text" name="social" class="text-field_prof" value="" placeholder="Соц. сеть">  
    <br>
    <span class="date-container">
        <label class="date-create">Дата собеседования</label>
    <input type="date" name="meetday" class="date" value="" placeholder="Дата собеседования" required>
    </span>
    
    <span class="date-container">
        <label class="date-create">Дата стажировки</label>
      
    <input type="date" name="testtime" class="date" value="" placeholder="Дата стажировки" required>
    </span>
 
    <span class="date-container">
        <label class="date-create">Дата размещения вакансии</label>
    <input type="date" name="datevacantion" class="date" value="" placeholder="Дата размещения вакансии">
    </span>
    <div class="res-pdf-container">
    <div class="send-container">
    <label for="resume" class="file-create">Резюме</label>
    <input id="resume" type="file" name="resume" class="send-field_prof disable" value=""  required>
    </div>
    <br>
    
    <div class="send-container">
        <label for="testpdf" class="file-create">Тестовое задание</label>
    <input id="testpdf" type="file" name="testpdf" class="send-field_prof disable" value=""  required>
    </div>
        </div>
        <br>
    
    <textarea type="text" name="comment" class="text-field_prof" value="" placeholder="Комментарий"></textarea>
    <input id="next" type="button"  class="alter-butt butt position-r" value="Дальше">
    <input id="create" type="submit" class="alter-butt butt disable position-r" value="Создать" >
</form>
</section>
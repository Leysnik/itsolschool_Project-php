<section class="flex-container">
	
	<?php if($_GET['create'] == 1){ echo '<h2>Запись создана</h2>'; }  ?>
	<h2 id="main" class="normal flex-start width-100 correct-h">Создать резюме</h2>	
	<form action="../php-validate/create/addemployers.php" method="post" enctype="multipart/form-data" class="flex-container">
			
			<div class="flex-container part start-pos">
				<div class="flex-container-2">
					<div class="flex-container correct-t ">
						<label>Дата собеседования<span class="red">*</span></label>
						<input type="date" id="meetday" name="meetday" class="date create-field" value="" min="<?php print_r(date('Y')-20);?>-01-01" max="<?php print_r(date('Y-m-d'));?>" required> </div>
					<div class="flex-container correct-t ">
						<label>Дата стажировки</label>
						<input type="date" id="testtime" name="testtime" class="date create-field" value="" min="<?php print_r(date('Y')-20);?>-01-01" max="<?php print_r(date('Y-m-d'));?>"> </div>
					<div class="flex-container correct-t ">
						<label>Дата размещения вакансии<span class="red">*</span></label>
						<input type="date" id="datevacantion" name="datevacantion" class="date create-field" value="" min="<?php print_r(date('Y')-20);?>-01-01" max="<?php print_r(date('Y-m-d'));?>" required> </div>
				</div>
				<div class="flex-container-2"><div class="create-field n-label">
					<label for="resume" class="">Резюме<span class="red">*</span></label>
					
					<input id="resume" type="file" name="resume" class="disable" onchange="Filevalidation()" value="" required>  </div>
				<div class="create-field n-label">
					<label for="testpdf" class="">Тестовое задание<span class="red">*</span></label>
				
					<input id="testpdf" type="file" name="testpdf" class="disable" value="" onchange="Filevalidation()" required>  </div></div>
			</div>
			<div class="flex-container part start-pos">
				<div class="flex-container-2">
					<div class="flex-container">

						<input type="text" name="name" class="create-field" value="" placeholder="Имя" required> </div>
					<div class="flex-container">
					
						<input type="text" name="surname" class="create-field" placeholder="Фамилия" value="" required> </div>
					<div class="flex-container">
						<input type="text" name="lastname" class="create-field" placeholder="Отчество(при наличии)" value=""> </div>
				</div>
				<div class="flex-container-2">
					<div class="flex-container n-label">
						
						<select required placeholder="Пол" name="sex" class="create-field select-field">
							<option>Пол</option>
							<option>Мужской</option>
							<option>Женский</option>
						</select>
					</div>
					<div class="flex-container">
						<label>Дата рождения<span class="red">*</span></label>
						<input type="date" name="birth" class="create-field" value="" min="<?php print_r(date('Y')-100);?>-01-01" max="<?php print_r(date('Y')-16);?>-01-01" required> </div>
					<div class="flex-container n-label">
						
						<input type="text" name="city" class="create-field" value="" placeholder="Город" required> </div>
				</div>
				<div class="flex-container-2">
					<div class="flex-container">
		
						<textarea name="educatePlace" class="textarea create-field  n-label"  value="" required>Образование</textarea>
					</div>
					<div class="flex-container n-label">
						
						<select type="text" name="work" class="create-field correct-t text-select" value="">
							<option>Должность</option>
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
			</div>
			<div class="flex-container part start-pos">
				<div class="flex-container-2 ">
					<div class="flex-container">
		
					<input type="text" name="vk" id="vk" class="create-field notification" placeholder="VK" value="">
					<div id="vk-d" class="red disable">Предупреждение:
						<br>Такая соц. сеть уже есть в базе</div>
				</div>
				<div class="flex-container">
		
					<input type="text" name="instagram" id="instagram" class="create-field notification" placeholder="INSTAGRAM" value="">
					<div id="instagram-d" class="red disable">Предупреждение:
						<br>Такая соц. сеть уже есть в базе</div>
				</div>
				<div class="flex-container">
		
					<input type="text" name="social" id="social" class="create-field notification" placeholder="HeadHunter" value="">
					<div id="social-d" class="red disable">Предупреждение:
						<br>Такая соц. сеть уже есть в базе</div>
				</div>
				</div>
				<div class="flex-container-2">
										<div class="flex-container">
					
						<input type="tel" name="tel" id="tel" class="create-field notification" placeholder="Телефон" value="" required>
						<div id="tel-d" class="red disable">Предупреждение:
							<br>Такой телефон уже есть в базе</div>
					</div>
					<div class="flex-container">
	
						<input type="email" id="email" name="email" class="create-field notification" placeholder="Email" value="">
						<div class="red disable" id="email-d">Предупреждение:
							<br>Такая почта уже есть в базе</div>
					</div>
				</div>
			</div>
			<div class="flex-container-2 right-pos">
			<label for="create" class="butt butt-width ">
                        <input id="create" class="n-butt " type="submit" value="Добавить">
                            <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<g filter="url(#filter0_ii)">
<path d="M1.02941 8.73544L17.9706 8.73544M17.9706 8.73544L10.7101 1.58838M17.9706 8.73544L10.7101 15.8825" stroke="url(#paint0_linear)" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<filter id="filter0_ii" x="-0.470581" y="0.0883789" width="19.9412" height="17.2941" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="-0.5" dy="-0.5"/>
<feGaussianBlur stdDeviation="0.25"/>
<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.4 0"/>
<feBlend mode="normal" in2="shape" result="effect1_innerShadow"/>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
<feOffset dx="0.5" dy="0.5"/>
<feGaussianBlur stdDeviation="0.25"/>
<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
<feColorMatrix type="matrix" values="0 0 0 0 0.127604 0 0 0 0 0.267969 0 0 0 0 0.408333 0 0 0 0.4 0"/>
<feBlend mode="normal" in2="effect1_innerShadow" result="effect2_innerShadow"/>
</filter>
<linearGradient id="paint0_linear" x1="0.0613429" y1="15.8825" x2="46.9505" y2="-22.7883" gradientUnits="userSpaceOnUse">
<stop stop-color="#352958"/>
<stop offset="0.234375" stop-color="#352958"/>
<stop offset="0.442708" stop-color="#EFF0FF"/>
<stop offset="0.682292" stop-color="#352958"/>
<stop offset="1" stop-color="#EFF0FF"/>
</linearGradient>
</defs>
</svg>
                        </label>
				</div>
		</form>
</section>
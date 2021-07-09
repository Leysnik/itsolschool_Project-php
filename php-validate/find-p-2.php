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
		
		<form action="../pages/findPage.php" method="get" class="flex-container">
		<h2 id="main" class="normal flex-start width-100 correct-h">Поиск резюме</h2>	
			<input type="text" class="disable" value="<?php print_r($page); ?>">
						<div class="flex-container part start-pos">
				<div class="flex-container-2">
					<div class="flex-container correct-t ">
						<label>Дата собеседования<span class="red">*</span></label>
						<input type="date" id="meetday" name="meetday" class="date create-field" value="<?php echo $meetday;?>" min="<?php print_r(date('Y')-20);?>-01-01" max="<?php print_r(date('Y-m-d'));?>"  > </div>
					<div class="flex-container correct-t ">
						<label>Дата стажировки</label>
						<input type="date" id="testtime" name="testtime" class="date create-field" value="<?php echo $testtime;?>" min="<?php print_r(date('Y')-20);?>-01-01" max="<?php print_r(date('Y-m-d'));?>"> </div>
					<div class="flex-container correct-t ">
						<label>Дата размещения вакансии<span class="red">*</span></label>
						<input type="date" id="datevacantion" name="datevacantion" class="date create-field" value="<?php echo $datevacantion;?>" min="<?php print_r(date('Y')-20);?>-01-01" max="<?php print_r(date('Y-m-d'));?>"  > </div>
				</div>
			</div>

			<div class="flex-container part start-pos">
				<div class="flex-container-2">
					<div class="flex-container">

						<input type="text" name="name" class="create-field" value="<?php echo $name;?>" placeholder="Имя"  > </div>
					<div class="flex-container">
					
						<input type="text" name="surname" class="create-field" placeholder="Фамилия" value="<?php echo $surname;?>"  > </div>
					<div class="flex-container">
						<input type="text" name="lastname" class="create-field" placeholder="Отчество(при наличии)" value="<?php echo $lastname;?>"> </div>
				</div>
				<div class="flex-container-2">
					<div class="flex-container n-label">
						
						<select   placeholder="Пол" name="sex" class="create-field select-field">
							<option><?php echo $sex;?></option>
							<option>Мужской</option>
							<option>Женский</option>
						</select>
					</div>
					
					<div class="flex-container n-label">
						
						<input type="text" name="city" class="create-field" value="<?php echo $city;?>" placeholder="Город"  > </div>
								<div class="flex-container">
						<label>Возраст</label>
						<div>
							<input type="number" name="birth_min" class="create-field number age" value="<?php echo $birth_min;?>" placeholder="min" min="16" max="100">-
							<input type="number" name="birth_max" class="create-field number age" value="<?php echo $birth_max;?>" placeholder="max" min="16" max="100"> </div>
					</div>
				</div>
				<div class="flex-container-2">

					<div class="flex-container">
						<label>Должность</label>
						<select type="text" name="work" class="create-field correct-t text-select" value="">
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
			</div>


			<div class="flex-container part start-pos">
				<div class="flex-container-2 ">
					<div class="flex-container">
		
					<input type="text" name="vk" id="vk" class="create-field notification" placeholder="VK" value="<?php echo $vk;?>">
					<div id="vk-d" class="red disable">Предупреждение:
						<br>Такая соц. сеть уже есть в базе</div>
				</div>
				<div class="flex-container">
		
					<input type="text" name="instagram" id="instagram" class="create-field notification" placeholder="INSTAGRAM" value="<?php echo $instagram;?>">
					<div id="instagram-d" class="red disable">Предупреждение:
						<br>Такая соц. сеть уже есть в базе</div>
				</div>
				<div class="flex-container">
		
					<input type="text" name="social" id="social" class="create-field notification" placeholder="HeadHunter" value="<?php echo $social;?>">
					<div id="social-d" class="red disable">Предупреждение:
						<br>Такая соц. сеть уже есть в базе</div>
				</div>
				</div>
				<div class="flex-container-2">
										<div class="flex-container">
					
						<input type="tel" name="tel" id="tel" class="create-field notification" placeholder="Телефон" value="<?php echo $tel;?>"  >
						<div id="tel-d" class="red disable">Предупреждение:
							<br>Такой телефон уже есть в базе</div>
					</div>
					<div class="flex-container">
	
						<input type="email" id="email" name="email" class="create-field notification" placeholder="Email" value="<?php echo $email;?>">
						<div class="red disable" id="email-d">Предупреждение:
							<br>Такая почта уже есть в базе</div>
					</div>
				</div>
			</div>
			<div class="flex-container-2 space-between width-100">
				<div class="flex-container-2"><a class="butt no-decoration" href="findPage.php">Сбросить</a></div>

			<div class="flex-container-2">			
			<label for="create" class="butt butt-width">
                        <input id="create" class="n-butt" type="submit" value="Поиск">
                            <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="8.35714" cy="8.28585" r="6.85714" stroke="url(#paint0_linear)" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<line x1="16.6284" y1="14.2858" x2="19.4999" y2="17.1573" stroke="url(#paint1_linear)" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
<defs>
<linearGradient id="paint0_linear" x1="15.998" y1="15.143" x2="-26.9712" y2="-14.7577" gradientUnits="userSpaceOnUse">
<stop stop-color="#352958"/>
<stop offset="0.234375" stop-color="#352958"/>
<stop offset="0.442708" stop-color="#EFF0FF"/>
<stop offset="0.682292" stop-color="#352958"/>
<stop offset="1" stop-color="#EFF0FF"/>
</linearGradient>
<linearGradient id="paint1_linear" x1="19.0377" y1="19.5235" x2="22.4509" y2="13.9888" gradientUnits="userSpaceOnUse">
<stop stop-color="#352958"/>
<stop offset="0.234375" stop-color="#352958"/>
<stop offset="0.682292" stop-color="#352958"/>
<stop offset="1" stop-color="#EFF0FF"/>
</linearGradient>
</defs>
</svg>

                        </label></div>

			</div>
			
		</form>
		<div class="disable all">
			<?php print_r($all); ?>
		</div>
	</section>
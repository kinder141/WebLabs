<label for="names">Registration</label>
				<form action="home.php"  method="POST" >
				    <input type="hidden" name="action" value="checking">
					<div>
					<input  type="text" class="<?php if($error_name==false) echo 'error';?>" name="names" value="<?php if(!($error_date&&$error_name&&$error_age))echo $_POST['names'];?>">
						
					</div>
					<p> Пол:
						<input   checked type="radio" name="sex" value="МЧ">
						Мужской
					
						<input <?php if($sex=='ЖН') { ?>checked<?php } ?> type="radio" name="sex" value="ЖН">
						Женский
					</p>
					<div class="date">
					<span>Дата рождения:</span>
					<input type="text" class="<?php if($error_date==false)echo 'error';?>" name="dd" placeholder="ДД" value="<?php if(!($error_date&&$error_name&&$error_age)) echo $_POST['dd'];?>">
						<input type="text" class="<?php if($error_date==false)echo 'error';?>" name="mm" placeholder="MM" value="<?php if(!($error_date&&$error_name&&$error_age)) echo $_POST['mm'];?>" >
						<input type="text" class="<?php if($error_date==false)echo 'error';?>" name="gg" placeholder="ГГГГ" value="<?php if(!($error_date&&$error_name&&$error_age)) echo $_POST['gg'];?>">
                    <?php
                    if($error_age==false)
				    echo '<span id="info">Вы малы для баскета</span>';
				    ?>
					</div>
					<input type="submit" id="submit">
					
				</form>
				<div class="schedule clearfix">
					<div class="today">
						<p class="day">Games Today</p>
						<p>Chicago Bulls - Los Angeles Lakers <br>	
							109 : 89<br>	
					New York Nicks - Seatle Supersonics<br>	
							99 : 120</p>
					</div>
					<div class="line"></div>
					<div class="tomorrow">
						<p class="day">Games Tomorrow</p>
						<p>Chicago Bulls - Los Angeles Lakers <br>
New York Nicks - Seatle Supersonics <br>
New Jersey Nets - Minesota Timberwolfs <br></p>
					</div>
				</div>
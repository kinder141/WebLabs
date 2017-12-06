
		<?php
            $title = "Home";
            include('header.php');
            
        ?>
		<div class="content clearfix">
			<?php
            include('aside.php');
        ?>
			<div class="news clearfix">
        <?php
               // mail('in.general.serg@gmail.com','Theme','yarik');
            
            $error_name=true;
            $error_date=true;
            $error_age=true;
            function getVar($name, $def)
            { 
            return isset($_POST[$name]) ? prep($_POST[$name]) : $def; 
            } 
            function prep($data, $bool=true) { 
            if (!is_array($data)) { 
            $data = trim($data); 
            if ($bool) 
            $data = htmlspecialchars($data); 
            } 
            return $data; 
            }   
            if(isset($_POST["action"]))
              {
                  if($_POST["action"]=="checking")
                  {
                   
                      $name = getvar('names',"");
                      $day = getvar('dd',"");
                      $month = getvar('mm',"");
                      $year = getvar('gg','');
                      $sex = getvar('sex','');
                      
                      include('valid.php');
                      $error_name = correctName($name);
                      $error_date=checkData($day,$month,$year);
                      $error_age=checkAge($sex,$day,$month,$year);
                      if($error_name==false||$error_date==false||$error_age==false)
                      {
                          include('form.php');
                      }
                      else
                      {
                          echo '<span style="font:14px/20px Roboto Condensed,sans-serif;text-decoration:none;color: #286086;">Имя:'.$name.'</span><br>';
                          echo '<span style="font:14px/20px Roboto Condensed,sans-serif;text-decoration:none;color: #286086;">Пол:'.$sex.'</span><br>';
                          echo '<span style="font:14px/20px Roboto Condensed,sans-serif;text-decoration:none;color: #286086;">Дата рождения:'.$day.'.'.$month.'.'.$year.'</span>';
                          
                      }
                  }
               }
                else
                    include('form.php');
                
                
?>
       	
				
			</div>
			<?php
            include('right_aside.php');
            include('footer.php');
        ?>
		
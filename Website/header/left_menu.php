            
			
			<?php if (isset($_SESSION['id'])) 
            {
            ?>
			<div id="menu">
               <div class="moduletable"><br>
                  	<a href="index.php"><b>HOME</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="about_us.php"><b>ABOUT US</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="../System/Page/Student/settings.php"><b>GO TO SYSTEM</b></a>	&nbsp;&nbsp;&nbsp;	
					<a href="../System/Page/Student/logout.php"><b>LOGOUT</b></a>	&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;
               </div>
            </div>
			<?php
			}
            else
			{
			?>
			 <div id="menu">
               <div class="moduletable"><br>
                  	<a href="index.php"><b>HOME</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="about_us.php"><b>ABOUT US</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="login.php"><b>LOGIN</b></a>	&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;
					<a href="register_owner.php"><b>REGISTER AS TUITION CENTRE</b></a>	&nbsp;&nbsp;&nbsp;	
					<a href="register_student.php"><b>REGISTER AS STUDENT</b></a>	&nbsp;&nbsp;&nbsp;	
               </div>
            </div>	
			<?php
			}				
			?>
			
			
			
			
			
			
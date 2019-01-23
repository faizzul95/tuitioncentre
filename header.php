<header id="header">
        <div class="header-top-bar">

          <div class="header-notification-bar">
            <div class="non-register-user">



              <div class="container">
                <div class="row">

                  <div class="col-md-7 col-sm-7">
                    <div class="logo-section">
                      <a href="index.php"><img src="img/logo1.png" alt="" width="70" height=770"></a>
                    </div>
                  </div>

                  <?php  if(!isset($_SESSION['user_id'])) { ?>
                        <div class="col-md-5 col-sm-5">
                          <div class="notification-section text-right">

                            <ul class="list-inline">
                              
                              
                               <li><a href="index.php">Home</a></li>
                              <li><a href="about.php">About us</a></li>
                               <li><a href="faq.php">FAQs</a></li>
                              <li><a href="login.php">Login</a></li>
                              <li><a href="register.php">Register</a></li>
                            </ul>
                          </div>
                        </div> 
                  <?php }
                  else { ?>

                  <div class="col-md-5 col-sm-5">
                    <div class="notification-section text-right">
                      <ul class="list-inline">

                         <?php  if($_SESSION['user_type'] != 'parent' && $_SESSION['user_type'] != 'tuition') { ?>
                          
                           <li><a href="index.php">Home</a></li>
                          <?php }  ?>

						<?php  if($_SESSION['user_type'] == 'parent') { ?>
                          <li><a href="about.php">About us</a></li>
                        <?php } else if($_SESSION['user_type'] == 'student') { ?>
                          <li><a href="about.php">About us</a></li>
                        <?php } else { ?> 
                          <li><a href="about.php">About us</a></li>
                        <?php } ?>
 							
                         <li><a href="forum.php">Forum</a></li>
                       
                       <?php  if($_SESSION['user_type'] == 'parent') { ?>
                          <li><a href="faq.php">FAQs</a></li>
                        <?php } else if($_SESSION['user_type'] == 'student') { ?>
                          <li><a href="faq.php">FAQs</a></li>
                        <?php } else { ?> 
                          <li><a href="faq.php">FAQs</a></li>
                        <?php } ?>
                          
                          
                          
                          
                       
                        <?php  if($_SESSION['user_type'] == 'parent') { ?>
                          <li><a href="parent_profile.php">Profile</a></li>
                        <?php } else if($_SESSION['user_type'] == 'student') { ?>
                          <li><a href="student_profile.php">Profile</a></li>
                        <?php } else { ?> 
                          <li><a href="tuition_profile.php">Profile</a></li>
                        <?php } ?>
                        <li><a href="logout.php">Logout</a></li>
                      </ul>
                    </div>
                  </div>

                  <?php } ?>

                </div> <!-- end .row -->
              </div> <!-- end .container -->
            </div> <!-- end .visitors-top-bar -->
          </div> <!-- end. header-notification-bar  -->
        </div>

      </header>
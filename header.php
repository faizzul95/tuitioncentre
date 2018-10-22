<header id="header">
        <div class="header-top-bar">

          <div class="header-notification-bar">
            <div class="non-register-user">

              <div class="container">
                <div class="row">

                  <div class="col-md-8 col-sm-8">
                    <div class="logo-section">
                      <a href="index.php"><img src="img/logo-bu.png" alt=""></a>
                    </div>
                  </div>

                  <?php  if(!isset($_SESSION['id'])) { ?>
                        <div class="col-md-4 col-sm-4">
                          <div class="notification-section text-right">

                            <ul class="list-inline">
                              <li><a href="index.php">Home</a></li>
                              <li><a href="login.php">Login</a></li>
                              <li><a href="register.php">Register</a></li>
                            </ul>
                          </div>
                        </div> 
                  <?php }
                  else { ?>

                  <div class="col-md-4 col-sm-4">
                    <div class="notification-section text-right">
                      <ul class="list-inline">
                        <li><a href="index.php">Home</a></li>
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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="main-wrapper" class="our-agents-content">

      <!-- HEADER -->
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

                  <div class="col-md-4 col-sm-4">
                    <div class="notification-section text-right">

                      <ul class="list-inline">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Login</a></li>
                        <li class="active"><a href="#">Register</a></li>
                      </ul>
                    </div>
                  </div>

                </div> <!-- end .row -->
              </div> <!-- end .container -->
            </div> <!-- end .visitors-top-bar -->
          </div> <!-- end. header-notification-bar  -->
        </div>
      </header>
      <!-- end #header -->

         <div class="header-page-title job-registration clearfix">
        <div class="title-overlay"></div>
        <div class="container">
          <h1>Login</h1>

          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Login</li>
          </ol>

        </div> <!-- end .container -->

      </div> <!-- end .header-page-title -->

      <!-- process content -->
      <div class="process-content">
        <div class="container">

          <!-- SIgn Up -->
          <div class="moti-sign">
              <?php include("login/index.php"); ?>
          </div>
        </div>
      </div>


      <!-- Footer Start -->
      <footer id="footer">
        <div class="copyright">
          <div class="container">
            <p>2018 &copy; All rights reserved. Powered by <a href="#">Tuition Center</a></p>
          </div>
        </div>
      </footer>
      <!-- end #footer -->

    </div>
    <!-- end #main-wrapper -->

    <!-- Scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.ba-outside-events.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.responsive-tabs.js"></script>
    <script src="js/jquery.tagsinput.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/scripts.js"></script>
    <script type="text/javascript">
      $('#tags').tagsInput();
    </script>
  </body>
</html>

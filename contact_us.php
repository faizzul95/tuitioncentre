<?php 
session_start();
include("connection.php"); 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to Tuition Center</title>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="assets/css/main.css" />

    <style type="text/css">
      ::placeholder{
        /*color: #000 !important;*/
      }
    </style>
  </head>

  <body>
    <div id="main-wrapper" class="our-agents-content">

      <!-- HEADER -->
      <?php include 'header.php'; ?>
      <!-- end #header -->

     

        </div> <!-- end .container -->

      </div>
          
         
<!-- Banner -->
      <section id="banner">
        <div class="inner"><br><br>
          <h1>CONTACT US</h1>
        </div>
        <video autoplay loop muted playsinline src="images/banner.mp4"></video>
      </section>

      <!-- Page Content -->
      <div id="page-content" class="pt50">
        <div class="container">
          <div class="row">

            <div class="col-sm-12 page-sidebar">
              <aside>
                <div class="widget sidebar-widget white-container contact-form-widget">
                  <h5 class="widget-title">Send Us a Message</h5>

                  <div class="widget-content">
                    <!-- <p></p> -->

                    <form class="mt30" action="controller.php" method="post">

                      <?php
                        if(isset($_SESSION['user_id'])) 
                        { ?>

                          <input type="hidden" name="user_type" value="<?php echo($_SESSION['user_type']); ?>" class="form-control">

                        <div class="form-group">
                          <input type="text" name="name" value="<?php echo $_SESSION['name'] ?: ''; ?>" class="form-control" placeholder="Name" style="background-color: #fff; border-color: #000;">
                        </div>

                        <div class="form-group">
                          <input type="text" name="email" value="<?php echo $_SESSION['email'] ?: ''; ?>" class="form-control" placeholder="Email"  style="background-color: #fff; border-color: #000;">
                        </div>

                       <?php } else { ?>

                        <input type="hidden" name="user_type" value="general" class="form-control" placeholder="">

                        <div class="form-group">
                          <input type="text" name="name"  class="form-control" placeholder="Name" style="background-color: #fff; border-color: #000;" required>
                        </div>

                        <div class="form-group">
                          <input type="text" name="email" class="form-control" placeholder="Email" style="background-color: #fff; border-color: #000;" required>
                        </div>

                      <?php }  ?>

                      <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Subject" style="background-color: #fff; border-color: #000;" required>
                      </div>

                      <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="How can we help you?" style="background-color: #fff; border-color: #000;" required></textarea>
                      </div>

                      <button type="submit" class="btn btn-primary" name="feedback" style="line-height: 1.5 !important; color: #fff !important"><i class="fa fa-envelope-o"></i> Send Message</button>
                    </form>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div> <!-- end .container -->

        <!-- end .container -->


      </div>

      <!-- Footer Start -->
      <?php include 'footer.php'; ?>
      <!-- end #footer -->

    </div>
    <!-- end #main-wrapper -->

    <!-- Scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
      <script src="http://maps.google.com/maps/api/js?key=AIzaSyD0QI6vd531_4xsTobCg_J1_6BZOEolRbs&sensor=false&libraries=geometry&v=3.7"></script>
      <script src="js/maplace.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/jquery.ba-outside-events.min.js"></script>
      <script src="js/jquery.responsive-tabs.js"></script>
      <script src="js/jquery.flexslider-min.js"></script>
      <script src="js/jquery.fitvids.js"></script>
      <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
      <script src="js/jquery.inview.min.js"></script>

      <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
      <script src="js/scripts.js"></script>
    </body>
  </html>


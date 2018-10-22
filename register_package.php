<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Student Registration</title>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.tagsinput.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="main-wrapper">

      <header id="header">
        <div class="header-top-bar">

          <!--
          HEADER TOP BAR WITH NOTIFICATION FOR REGISTER USER
          -->

          <div class="header-notification-bar" style="display:none;">
            <div class="register-user">

              <div class="container">
                <div class="row">

                  <div class="col-md-3 col-sm-3">
                    <div class="logo-section">
                      <a href="index.html"><img src="img/logo-bu.png" alt=""></a>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-5">
                    <div class="search-form">

                      <form action="#">
                        <button class="dropdown-search"><i class="fa fa-angle-down"></i> <i class="fa fa-bars"></i></button>
                        <input type="search" placeholder="Search...">
                        <button class="search-button"><i class="fa fa-search"></i></button>
                      </form>

                    </div>
                  </div>

                  <div class="col-md-3 col-sm-4">
                    <div class="notification-section text-right">

                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-envelope-o"></i></a><span class="new-notification">3</span></li>
                        <li><a href="#"><i class="fa fa-bell-o"></i></a><span class="new-notification">3</span></li>
                        <li class="user-profile-pic"><a href="#"><img src="./img/content/agent-img-1.jpg" alt=""></a></li>
                      </ul>
                    </div>
                  </div>

                </div> <!-- end .row -->
              </div> <!-- end .container -->
            </div> <!-- end .register-user -->
          </div> <!-- end. header-notification-bar  -->

          <!--
          END HEADER NOTIFICATION TOP BAR
          -->

          <!--
          HEADER TOP BAR FOR NON REGISTER USER
          -->

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
                        <li><a href="register.php">Register</a></li>
                      </ul>
                    </div>
                  </div>

                </div> <!-- end .row -->
              </div> <!-- end .container -->
            </div> <!-- end .visitors-top-bar -->
          </div> <!-- end. header-notification-bar  -->
        </div>
      </header>
      <div class="header-page-title  clearfix">
        <div class="title-overlay"></div>
        <div class="container">
          <h1>Student Information</h1>

          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Student Registration</li>
          </ol>

        </div> <!-- end .container -->

      </div> <!-- end .header-page-title -->

      <div id="page-content" class="job-registration job-registration full-width">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 page-content mt30">
              <div class="">
                <div class="tab-pane active" id="agency-profile-tab">


                  <h4 class=" client-registration-title">Student registration
                    <span>Information</span>

                  </h4>

                  <div class="information-form">
                    <div class="table-responsive">
                      <form action="#" class="default-form">

                        <div class="single-content">
                          <label><span>*</span>Student Name</label>
                          <div class="company-name">
                            <input type="text" placeholder="">
                          </div>
                        </div> <!-- end .single-content -->

                        <div class="single-content">
                          <label><span>*</span>Age</label>
                          <div class="company-name">
                            <input type="text" placeholder="">
                          </div>
                        </div> <!-- end .single-content -->


                        <div class="single-content">
                          <label ><span>*</span>Phone Number</label>
                          <div class="company-name">
                            <input type="text" placeholder="">
                          </div>
                        </div> <!-- end .single-content -->

                        <div class="single-content">
                          <label ><span>*</span>Start Date</label>
                          <div class="company-name">
                            <input type="date" placeholder="" class="form-control">
                          </div>
                        </div> <!-- end .single-content -->

                        <div class="single-content">
                          <label ><span>*</span>Package Date</label>
                          <div class="company-name">
                            <input type="text" placeholder="" class="form-control">
                          </div>
                        </div> <!-- end .single-content -->

                        <div class="single-content">
                          <label ><span>*</span>Price</label>
                          <div class="company-name">
                            <input type="text" placeholder="" class="form-control">
                          </div>
                        </div> <!-- end .single-content -->


                        
                      </form> <!-- end form -->
                    </div>
                  </div> <!-- end information-form -->
                </div> <!-- end .tabe pane -->
              </div>

              <hr>

              <div class="submit-preview-buttons">
                  <a href="#" class="btn btn-default pull-right">Confirm</a>
              </div> <!-- end .submit-preview-buttons -->
            </div> <!-- end .page-content -->
          </div>
        </div> <!-- end .container -->
      </div> <!-- end #page-content -->

      <footer id="footer">
        <div class="copyright">
          <div class="container">
            <p>2018 &copy; All rights reserved. Powered by <a href="#">Tuition Center</a></p>
          </div>
        </div>
      </footer> <!-- end #footer -->

    </div> <!-- end #main-wrapper -->

    <!-- Scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.ba-outside-events.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.responsive-tabs.js"></script>
    <script src="js/jquery.tagsinput.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
    <script src="js/scripts.js"></script>


    <script type="text/javascript">
      $('#tags').tagsInput();

      bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script>

  </body>
</html>

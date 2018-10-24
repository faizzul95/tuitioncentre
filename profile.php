<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Profile</title>

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

         <?php include 'header.php'; ?>
        </div>
        <!-- end .header-top-bar -->
      </header> <!-- end #header -->
      <div class="header-page-title job-registration clearfix">
        <div class="title-overlay"></div>
        <div class="container">
          <h1>Profile - Mohd Fahmy</h1>

          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Profil</li>
          </ol>

        </div> <!-- end .container -->

      </div> <!-- end .header-page-title -->

      <div id="page-content" class="candidate-profile">
        <div class="container">
          <div class="page-content mt30 mb30">
            <div class="">


              <div class="tab-pane active" id="candidate-profile">
                <div class="row">
                  <div class="col-md-4">
                    <div class="motijob-sidebar">
                      <div class="candidate-profile-picture">
                        <img src="img/content/candidate-profile.jpg" alt="">

                        <a href="#">M Fahmy Izwan Bin Zulkhafri</a>
                      </div> <!-- end .agent-profile-picture -->

                      <div class="candidate-general-info">
                        <div class="title clearfix">
                            <h6>General Information</h6>
                            <a class="pull-right" href="profile_update.php"><i class="fa fa-edit"></i>Update</a>
                          </div> <!-- end .end .title -->

                        <ul class="list-unstyled">
                          <li><strong>Birthday:</strong>June 17, 1986</li>
                          <li><strong>Address:</strong>New York City, United States</li>
                          <li><strong>Phone:</strong>+6 012-4567890</li>
                          <li><strong>Email:</strong>email@example.com</li>
                        </ul>

                      </div> <!-- end .candidate-general-info -->
                    </div>
                  </div> <!-- end .3col grid layout -->

                  <div class="col-md-8">
                    <div class="candidate-description">

                      <div class="candidate-details">
                        <div class="candidate-title">
                          <h5>List Of Package Register</h5>
                        </div>


                        <table class="table table-bordered">
                                      <thead>
                                        <tr class="bg-primary">
                                          <th scope="col"><center>#</center></th>
                                          <th scope="col"><center>Package Name</center></th>
                                          <th scope="col"><center>Package Status</center></th>
                                          <th scope="col"><center>Package Price</center></th>
                                          <th scope="col"><center>Action</center></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row"><center>1</center></th>
                                          <td><center>Math Pro</center></td>
                                          <td><center>Ongoing</center></td>
                                          <td><center>150.00</center></td>
                                          <td><center><button class="btn btn-default">Review</button> </center></td>
                                        </tr>
                                        <tr>
                                          <th scope="row"><center>1</center></th>
                                          <td><center>Biology</center></td>
                                          <td><center>Done</center></td>
                                          <td><center>350.00</center></td>
                                          <td><center><button class="btn btn-default">Review</button> </center></td>
                                        </tr>
                                        <tr>
                                          <th scope="row"><center>1</center></th>
                                          <td><center>Math Pro</center></td>
                                          <td><center>Ongoing</center></td>
                                          <td><center>150.00</center></td>
                                          <td><center><button class="btn btn-default">Review</button> </center></td>
                                        </tr>
                                        <tr>
                                          <th scope="row"><center>1</center></th>
                                          <td><center>Math Pro</center></td>
                                          <td><center>Ongoing</center></td>
                                          <td><center>150.00</center></td>
                                          <td><center><button class="btn btn-default">Review</button> </center></td>
                                        </tr>
                                      </tbody>
                                    </table>

                      </div> <!-- end .candidate-details -->

                    </div> <!-- end .candidate-description -->
                  </div> <!-- end .9col grid layout -->

                </div> <!-- end .row -->
              </div> <!-- end .tabe pane -->



            </div> <!-- end .responsive-tabs.dashboard-tabs -->

          </div> <!-- end .page-content -->
        </div> <!-- end .container -->
      </div> <!-- end #page-content -->

      <?php include 'footer.php'; ?>

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

      </script>

    </body>
  </html>

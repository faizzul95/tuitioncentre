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
        <?php include 'header.php'; ?>
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
        <?php include 'footer.php'; ?>
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

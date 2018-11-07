<?php session_start(); 
include_once("connection.php");

if(isset($_SESSION['tuition_id']))
{
  $tuition_id = $_SESSION['tuition_id'];
}
else
{
  session_destroy();
  echo "<script type='text/javascript'>alert('Please Log In');</script>";
  echo "<script type='text/javascript'> document.location='login.php'; </script>";
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
      include_once("connection.php");
    ?>  
    <title>Register Package</title>

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
          <h1>Register Package</h1>

          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="tuition_profile.php">Tuition Profile</a></li>
            <li class="active">Register Package</li>
          </ol>

        </div> <!-- end .container -->

      </div> <!-- end .header-page-title -->

      <div id="page-content" class="job-registration job-registration full-width">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 page-content mt30">
              <div class="">
                <div class="tab-pane active" id="agency-profile-tab">


                  <h4 class=" client-registration-title">Register Package
                    <span>Information</span>

                  </h4>

                  <div class="information-form">
                    <div class="table-responsive">
                      <form action="controller.php" class="default-form" method="post">
                       <input type="hidden" name="tuition_id" value="<?php echo $_SESSION['user_id']; ?>" >
                        <div class="single-content">
                          <label><span>*</span>Package Name</label>
                          <div class="company-name">
                            <input type="text" name="package_name" placeholder="" required="" >
                          </div>
                        </div> <!-- end .single-content -->

                        <div class="single-content">
                          <label><span>*</span>Package Capacity</label>
                          <div class="company-name">
                            <input type="text" name="package_capacity" placeholder="" required="">
                          </div>
                        </div> <!-- end .single-content -->

                        <div class="single-content">
                          <label><span>*</span>Package Price</label>
                          <div class="company-name">
                            <input type="text" name="package_price" placeholder="" required>
                          </div>
                        </div> <!-- end .single-content -->

                       <!--  <div class="single-content">
                          <label><span>*</span>Package Description</label>
                          <div class="company-name">
                            <input type="text" name="package_description" placeholder="">
                          </div>
                        </div> --> <!-- end .single-content -->

                       <!--  <div class="single-content">
                          <label><span>*</span>Package Subject</label>
                          <div class="company-name">
                            <?php
                            $sql = "SELECT * FROM `master_subject`";
                            $sql_subject = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

                            while( $row = mysqli_fetch_array($sql_subject) )
                            {
                              ?>
                                <input type="checkbox" name="<?php echo $row['subject_id']; ?>" value="<?php echo $row['subject_id']; ?>"><?php echo $row['subject_name']; ?><br>
                              <?php
                            }
                            ?>
                          </div>
                        </div>  --><!-- end .single-content -->


                        <input type="hidden" name="tuition_id" value="<?php echo $tuition_id; ?>">

                        <!-- <input type="submit" name="add_package" value="Add Package"> -->
                         <div class="submit-preview-buttons">
                            <!-- <a href="#" >Confirm</a> -->
                            <input type="submit" name="add_package" class="btn btn-default pull-right" value="Add Package">
                        </div> <!-- end .submit-preview-buttons -->
                      </form> <!-- end form -->
                    </div>
                  </div> <!-- end information-form -->
                </div> <!-- end .tabe pane -->
              </div>
             
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

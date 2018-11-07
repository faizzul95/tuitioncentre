<?php session_start(); 
include_once("connection.php");

 if(isset($_SESSION['student_id'])) 
    {
       $student_id = $_SESSION['student_id'];
    }

if (isset($_GET['package_id']))
{
  $package_id = $_GET['package_id'];

  $sql = "SELECT * FROM `tuition_package` WHERE `package_id` = '$package_id'";
  $sql_package = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $row = mysqli_fetch_array($sql_package);

  $package_name = $row['package_name'];
  $package_capacity = $row['package_capacity'];
  $package_price = $row['package_price'];

  $sql = "SELECT * FROM `student` WHERE `student_id` = '$student_id'";
  $sql_std = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $row = mysqli_fetch_array($sql_std);

  $student_name = $row['student_name'];
  $student_telno = $row['student_telno'];
  $student_email = $row['student_email'];
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
    <title>Apply Package</title>

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
          <h1>Apply Package</h1>

          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Tuition Profile</a></li>
            <li class="active">Apply Package</li>
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
                          <label><span>*</span>Student Name</label>
                          <div class="company-name">
                            <input type="text" name="student_name" placeholder="" disabled value="<?php echo $student_name; ?>">
                          </div>
                        </div> <!-- end .single-content -->

                        <div class="single-content">
                          <label><span>*</span>Student Phone Number</label>
                          <div class="company-name">
                            <input type="text" name="student_telno" placeholder="" disabled value="<?php echo $student_telno; ?>">
                          </div>
                        </div> <!-- end .single-content -->

                        <div class="single-content">
                          <label><span>*</span>Student Email</label>
                          <div class="company-name">
                            <input type="text" name="student_email" value="<?php echo $student_email; ?>">
                          </div>
                        </div> <!-- end .single-content -->


                        <div class="single-content">
                          <label><span>*</span>Start Date</label>
                          <div class="company-name">
                            <input type="Date" name="start_date" placeholder="" required>
                          </div>
                        </div> <!-- end .single-content -->

                        <div class="single-content">
                          <label><span>*</span>Package Name</label>
                          <div class="company-name">
                            <input type="text" name="package_name" placeholder="" disabled value="<?php echo $package_name; ?>">
                          </div>
                        </div> <!-- end .single-content -->

                        <div class="single-content">
                          <label><span>*</span>Package Price</label>
                          <div class="company-name">
                            <input type="text" name="package_price" placeholder="" disabled value="<?php echo $package_price; ?>">
                          </div>
                        </div> <!-- end .single-content -->

                        <input type="text" name="package_id" value="<?php echo $package_id; ?>">

                        <!-- <input type="submit" name="add_package" value="Add Package"> -->
                         <div class="submit-preview-buttons">
                            <!-- <a href="#" >Confirm</a> -->
                            <input type="submit" name="std_register_package" class="btn btn-default pull-right" value="Register Package">
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

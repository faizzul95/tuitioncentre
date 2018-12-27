<?php session_start(); 
include_once("connection.php");
if ( !isset( $_SESSION['user_id'] ) ){
  header('Location: login.php');
}
// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';

if(isset($_SESSION['student_id'])) 
{
   $student_id = $_SESSION['student_id'];
}
else
{
  echo "<script type='text/javascript'>alert('No Student Id is set ! Please Log In Again');</script>";
  echo "<script type='text/javascript'> document.location='login.php'; </script>";
}

if (isset($_GET['payment_id']))
{
  $payment_id = $_GET['payment_id'];

  $sql = "SELECT * FROM `payment`
  		INNER JOIN `tuition_student_list` ON `tuition_student_list`.`list_id` = `payment`.`list_id`
  		INNER JOIN `tuition_package` ON `tuition_student_list`.`package_id` = `tuition_package`.`package_id`
  		INNER JOIN `tuition` ON `tuition`.`tuition_id` = `tuition_package`.`tuition_id`
  		INNER JOIN `student` ON `student`.`student_id` = `tuition_student_list`.`student_id`
  		WHERE `payment`.`payment_id` = '$payment_id'";

  $sql_pay = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $row = mysqli_fetch_array($sql_pay);

  $tuition_name = $row['tuition_name'];
  $package_name = $row['package_name'];
  $student_name = $row['student_name'];
  $list_id = $row['list_id'];
  $payment_status = $row['payment_status'];
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
    <title>Payment</title>

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
          <h1>Payment</h1>

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


                  <h4 class=" client-registration-title">Payment
                    <span>Payment</span>

                  </h4>

                  <div class="information-form">
                    <div class="table-responsive">
                      <form action="controller.php" class="default-form" method="post"  enctype="multipart/form-data">
                       	<input type="hidden" name="payment_id" value="<?php echo $payment_id; ?>" >
                        <div class="single-content">
                          <label><span>*</span>Student Name</label>
                          <div class="company-name">
                            <input type="text" name="student_name" placeholder="" disabled value="<?php echo $student_name; ?>">
                          </div>
                        </div> <!-- end .single-content -->

                        <div class="single-content">
                          <label><span>*</span>Tuition Name</label>
                          <div class="company-name">
                            <input type="text" name="tuition_name" placeholder="" disabled value="<?php echo $tuition_name; ?>">
                          </div>
                        </div> <!-- end .single-content -->
                        <div class="single-content">
                          <label><span>*</span>Package Name</label>
                          <div class="company-name">
                            <input type="text" name="package_name" value="<?php echo $package_name; ?>" disabled>
                          </div>
                        </div> <!-- end .single-content -->
                        <div class="single-content">
                          <label><span>*</span>Payment Id</label>
                          <div class="company-name">
                            <input type="text" name="payment_id" value="<?php echo $payment_id; ?>" disabled>
                          </div>
                        </div> <!-- end .single-content -->
                        <div class="single-content">
                          <label><span>*</span>Select receipt image to upload (max : 1MB) :</label>
                          <div class="company-name">
                            <input type="file" name="receipt" required>
                          </div>
                        </div> <!-- end .single-content -->

                        <!-- <input type="submit" name="add_package" value="Add Package"> -->
                         <div class="submit-preview-buttons">
                            <!-- <a href="#" >Confirm</a> -->
                            <input type="submit" name="pay_package" class="btn btn-default pull-right" value="Pay">
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

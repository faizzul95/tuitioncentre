<?php session_start(); 
include_once("connection.php");
if ( !isset( $_SESSION['user_id'] ) ){
  header('Location: login.php');
}

if(isset($_GET['p_id']))
{
  $package_id = $_GET['p_id'];

  $sql = "SELECT * FROM `tuition_package` where `package_id` = '$package_id'";
  $sql_package = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $row = mysqli_fetch_array($sql_package);

  $package_name = $row['package_name'];
  $package_capacity = $row['package_capacity'];
  $package_price = $row['package_price'];
  $tuition_id = $row['tuition_id'];
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
    <title>View Package</title>

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
    <style type="text/css">
      .h::-webkit-scrollbar {
    /*width: 0px;*/
    background: transparent; /* make scrollbar transparent */
    }

    </style>
  </head>

  <body>
    <div id="main-wrapper">

      <header id="header">
        <?php include 'header.php'; ?>
      </header>
      
      <div class="header-page-title  clearfix">
        <div class="title-overlay"></div>
        <div class="container">
          <h1>Package View</h1>

          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="tuition_profile.php">Tuition Profile</a></li>
            <li class="active">Package View</li>
          </ol>

        </div> <!-- end .container -->

      </div> <!-- end .header-page-title -->

      <div id="page-content" class="job-registration job-registration full-width" style="line-height: 1.5 !important;">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 page-content mt30">
              <div class="">
                <div class="tab-pane active" id="agency-profile-tab">


                  <h4 class=" client-registration-title">Package View
                    <span>Information</span>

                  </h4>

                  <div class="information-form">
                    <div class="table-responsive">
                      <!-- <form class="default-form"> -->
                       <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" >

                       <div class="single-content h" style="overflow-y: scroll;">
                          <label>Package Name :</label>
                          <div class="company-name">
                            <input type="text" name="package_name" value="<?php echo $package_name; ?>" disabled>
                          </div>
                        </div>

                        <div class="single-content h" style="overflow-y: auto;">
                          <label>Package Price :</label>
                          <div class="company-name">
                            <input type="text" name="package_price" value="<?php echo $package_price; ?>" disabled>
                          </div>
                        </div>

                        <div class="single-content" style="height: 100px !important; overflow-y: scroll;">
                          <label style="height: 100px"><span>*</span>Package Subject</label>
                          <div class="company-name">
                            <?php
                              $sql = "SELECT * FROM `tuition_package_subject` inner join `master_subject` on `master_subject`.`subject_id` = `tuition_package_subject`.`subject_id` where `package_id` = '$package_id'";

                              $sql_subject = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
                              if (mysqli_num_rows($sql_subject)==0){
                                echo "No Subject Registered";
                              }
                              $package_desc = '';
                              while ($row = mysqli_fetch_array($sql_subject))
                              {
                                $package_desc .= "{$row['subject_name']} : {$row['subject_day']} : {$row['subject_start_hour']} - {$row['subject_end_hour']} <br>";
                              }
                              echo $package_desc;
                            ?>

                            <!-- <input type="text" name="package_desc" value="<?php echo $package_desc; ?>" disabled> -->
                          </div>
                        </div>

                        <div class="single-content h" style="overflow-y: scroll;">
                          <label><span>*</span>Package Capacity :</label>
                          <div class="company-name">
                            <?php
                              $sql = "SELECT count(*) as TOT_STD FROM `tuition_student_list` WHERE `package_id` = '$package_id'";
                              $sql_subject = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
                              $row = mysqli_fetch_array($sql_subject);
                              $totStd = $row['TOT_STD'];
                            ?>
                              <input type="text" name="package_capacity" value="<?php echo $totStd; ?> / <?php echo $package_capacity; ?>" disabled>
                          </div>
                        </div>

                        <button class="btn btn-default" onclick="location.href = 'tuition_student_list.php?p_id=<?php echo $package_id; ?>';">View Students</button>
                        
                        <!-- <input type="hidden" name="package_id" value="<?php echo $package_id; ?>"> -->
                        <!-- <input type="submit" name="add_package" value="Add Package">  -->
                         <div class="submit-preview-buttons">
                            <!-- <a href="#" >Confirm</a> -->
                            <!-- <input type="submit" name="add_subject" class="btn btn-default pull-right" value="Add Subject"><br><br><br> -->
                        </div> <!-- end .submit-preview-buttons -->
                      <!-- </form> end form -->
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
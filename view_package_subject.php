<?php session_start(); 
include_once("connection.php");

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

      <div id="page-content" class="job-registration job-registration full-width">
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
                      <form action="controller.php" class="default-form" method="post">
                       <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" >

                       <div class="single-content">
                          <label>Package Name :</label>
                          <div class="company-name">
                            <input type="text" name="package_name" value="<?php echo $package_name; ?>" disabled>
                          </div>
                        </div>

                        <div class="single-content">
                          <label>Package Price :</label>
                          <div class="company-name">
                            <input type="text" name="package_price" value="<?php echo $package_price; ?>" disabled>
                          </div>
                        </div>

                        <div class="single-content">
                          <label><span>*</span>Package Subject</label>
                          <div class="company-name">
                            <?php
                              $sql = "SELECT * FROM `tuition_package_subject` inner join `master_subject` on `master_subject`.`subject_id` = `tuition_package_subject`.`subject_id` where `package_id` = '$package_id'";

                              $sql_subject = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
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

                        <div class="single-content">
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

                        <div class="">
                          <label><span>*</span>Student List :</label>
                          <div class="company-name">
                            <?php
                              $sql = "SELECT * FROM `tuition_student_list` inner join `student` on `student`.`student_id` = `tuition_student_list`.`student_id` WHERE `package_id` = '$package_id'";
                              $sql_std = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
                              
                              $i = 0;
                              echo "<table border='1'>";
                              echo "<th>No</th>
                                    <th>Student Name</th>
                                    <th>Student Gender</th>
                                    <th>Student Phone</th>
                                    <th>Student E-mail</th>
                                    <th>Student Start Date</th>
                                    <th>Action</th>";
                              while ($row = mysqli_fetch_array($sql_std))
                              { 
                                ++$i;
                                $list_id = $row['list_id'];
                                echo "<tr>
                                    <td>{$i}</td>
                                    <td>{$row['student_name']}</td>
                                    <td>{$row['student_gender']}</td>
                                    <td>{$row['student_telno']}</td>
                                    <td>{$row['student_email']}</td>
                                    <td>{$row['student_start_date']}</td>
                                    <td><input type='button' class='btn btn-danger' onclick='remove_student($list_id, $package_id)' value='REMOVE'></td>
                                    </tr>";
                              }
                            ?>
                          </div>
                        </div>

                        <!-- <input type="hidden" name="package_id" value="<?php echo $package_id; ?>"> -->
                        <!-- <input type="submit" name="add_package" value="Add Package">  -->
                         <div class="submit-preview-buttons">
                            <!-- <a href="#" >Confirm</a> -->
                            <!-- <input type="submit" name="add_subject" class="btn btn-default pull-right" value="Add Subject"><br><br><br> -->
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

    <script type="text/javascript">
        function remove_student(list_id,package_id)
        {
          if( confirm("Delete this package ?") )
          {
            window.location = "controller.php?REMOVE_STD="+list_id+"&PACKAGE_ID="+package_id;
          }
        }
      </script>

  </body>
</html>

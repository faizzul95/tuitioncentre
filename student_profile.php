<?php 
 include_once("connection.php");
 session_start(); 

 $usid = $_SESSION['user_id'];
 $student_id = $_SESSION['student_id'];
 $sql = "SELECT * FROM `student` WHERE `student_id` = '$student_id'";
 $sql_usr = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
 $row = mysqli_fetch_array($sql_usr);

 $lastupdate = $row['student_last_update'];
 $name = $row['student_name'];
 $ic = $row['student_ic'];
 $no = $row['student_telno'];
 $email = $row['student_email'];
 $gender = $row['student_gender'];
 $dob = $row['student_dob'];

 if($lastupdate == NULL) 
 {
   header("Location:student_profile-update.php?id=$usid");  
 }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Profile || Student</title>

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
          <h1>Student Profile</h1>

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
                        <!-- <img src="img/content/candidate-profile.jpg" alt=""> -->
                        <div class="upload-img-field">

                        </div>
                        <a href="#"><?php echo $name; ?></a>
                      </div> <!-- end .agent-profile-picture -->

                      <div class="candidate-general-info">
                        <div class="title clearfix">
                            <h6>General Information</h6>
                            <a class="pull-right" href="student_profile-update.php"><i class="fa fa-edit"></i>Update</a>
                          </div> <!-- end .end .title -->

                        <ul class="list-unstyled">
                          <li><strong>Birthday:</strong><?php echo $dob; ?></li>
                          <li><strong>Gender:</strong><?php echo $gender; ?></li>
                          <li><strong>Phone:</strong><?php echo $no; ?></li>
                          <li><strong>Email:</strong><?php echo $email; ?></li>
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
                                          <th scope="col"><center>Tuition and Package Name</center></th>
                                          <th scope="col"><center>Package Register Date</center></th>
                                          <th scope="col"><center>Package Price</center></th>
                                          <th scope="col"><center>Action</center></th>
                                        </tr>
                                      </thead>
                                      <tbody>

                                      <?php
                                       $sql = "SELECT * FROM `tuition_package` 
                                                INNER JOIN  `tuition_student_list` ON `tuition_package`.`package_id` = `tuition_student_list`.`package_id`
                                                INNER JOIN `tuition` ON `tuition`.`tuition_id` = `tuition_package`.`tuition_id`
                                                INNER JOIN `payment` ON `payment`.`list_id` = `tuition_student_list`.`list_id`
                                                WHERE `student_id` = '$student_id'";

                                      $sql_package = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

                                      // if (mysqli_num_rows($sql_tuition)==0){
                                      //        echo "No result found";
                                      //  }
                                      $count = 1;
                                     while($row = mysqli_fetch_assoc($sql_package))
                                      { 
                                          ?>
                                        <tr>
                                          <th scope="row"><center><?php echo $count; ?></center></th>
                                          <td><center><?php echo $row['tuition_name']; ?><br><?php echo $row['package_name']; ?></center></td>
                                          <td><center><?php echo $row['start_date']; ?></center></td>
                                          <td><center><?php echo $row['package_price']; ?></center></td>
                                          <?php
                                            if ( $row['payment_status'] == 'UNPAID')
                                            { 
                                                // if ( $row['start_date'] < $today )
                                            ?>
                                                <td><center><button class="btn btn-default" onclick="location.href='pay_package.php?payment_id=<?php echo $row['payment_id']; ?>';">Pay</button> </center></td>
                                            <?php
                                            }
                                            elseif ( $row['payment_status'] == 'PENDING') 
                                            { ?>
                                                <td><center>Pending</center></td>
                                            <?php
                                            }
                                            else  //paid
                                            { ?>
                                                <td><center><button class="btn btn-default" onclick="location.href='review_package.php?package_id=<?php echo $row['package_id']; ?>';">Review</button> </center></td>
                                            <?php
                                            }
                                            ?>
                                        </tr>
                                        <?php
                                        $count++;
                                      }
                                      ?>
                                       
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

        function pay(list)
        {
          var url = "pay_package.php?list_id="
          url = url.concat(list);
         
          window.open(url, "_blank", "resizable=yes,top=100,left=500,width=800,height=800");
        }
      </script>

    </body>
  </html>

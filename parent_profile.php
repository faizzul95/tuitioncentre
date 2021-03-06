<?php 

 session_start(); 
 include_once("connection.php");
if ( !isset( $_SESSION['user_id'] ) ){
  header('Location: login.php');
}

 $user_id = $_SESSION['user_id'];

 $sql = "SELECT * FROM `parent` WHERE `user_id` = '$user_id'";
 $sql_usr = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
 $row = mysqli_fetch_array($sql_usr);

 $lastupdate = $row['parent_last_update'];
 $name = $row['parent_name'];
 $ic = $row['parent_ic'];
 $no = $row['parent_telno'];
 $email = $row['parent_email'];
 $gender = $row['parent_gender'];
 $dob = $row['parent_dob'];
 $parent_img = $row['parent_img'];

 if($lastupdate == NULL) 
 {
     header("Location:parent_profile-update.php?id=$user_id");  
 }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Profile || Parent</title>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        <div class="container"  style="line-height: 1.5 !important;">
          <h1>Profile (Parent)</h1>

          <ol class="breadcrumb">
            
            <li class="active">Profile (Parent)</li>
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
                    <div class="motijob-sidebar" style="line-height: 1.5 !important;">
                      <div class="candidate-profile-picture" >
                        <img src="profile_pic/<?php echo $parent_img; ?>" alt="">
                        <!-- <img src="img/content/candidate-profile.jpg" alt=""> -->
                       <!--  <div class="upload-img-field">

                        </div> -->
                        <a href="#"><?php echo $name; ?></a>
                      </div> <!-- end .agent-profile-picture -->

                      <div class="candidate-general-info">
                        <div class="title clearfix">
                            <h6>General Information</h6>
                            <a class="pull-right" href="parent_profile-update.php"><i class="fa fa-edit"></i>Update</a>
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

                      <div class="candidate-details"  style="line-height: 1.5 !important;">
                        <div class="candidate-title">
                          <h5>List Of Children</h5>
                        </div>

                        <div class="form-banner-button">
                            <div class="pRemove-import pull-right">
                              <a class="btn btn-default" href='register_children.php'>Add Children</a>
                            </div> <!-- end .pRemove-import -->
                          </div> <!-- end .form-banner-button -->

                          <br><br>

                        <table class="table table-bordered">
                                      <thead>
                                        <tr class="bg-primary">
                                          <th scope="col"><center>#</center></th>
                                          <th scope="col"><center>Student Name</center></th>
                                          <th scope="col"><center>Student IC</center></th>
                                          <th scope="col"><center>Package Register</center></th>
                                          <th scope="col"><center>Action</center></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                         
                                        <?php
                                       // $sql = "SELECT `tuition_student_list`.*, `student`.*, `tuition_package`.*
                                       //          FROM `student` 
                                       //          INNER JOIN  `tuition_student_list` ON `student`.`student_id` = `tuition_student_list`.`student_id` 
                                       //          INNER JOIN `tuition_package` ON `tuition_student_list`.`package_id` = `tuition_package`.`package_id`
                                       //          WHERE `user_id` = '$user_id'";

                                      
                                      $sql = "SELECT * FROM `student` WHERE `user_id` = '$user_id'";
                                              
                                      $sql_child = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

                                      if (mysqli_num_rows($sql_child)==0){
                                             echo "No result found";
                                       }
                                      $count = 1;
                                     while($row = mysqli_fetch_assoc($sql_child))
                                      { 
                                        $student_id = $row['student_id'];
                                          ?>
                                        <tr>
                                          <th scope="row"><center><?php echo $count; ?></center></th>
                                          <td><center><?php echo $row['student_name']; ?></center></td>
                                          <td><center><?php echo $row['student_ic']; ?></center></td>
                                          <td><center><button class="btn btn-sm glyphicon glyphicon-eye-open" onclick="location.href='controller.php?VIEW_STD=<?php echo $student_id; ?>';"> View</button></center></td>
                                          <td><center><button onclick="location.href='index.php?student_id=<?php echo $row['student_id']; ?>';" class="btn btn-info">Apply <i class="fa fa-check-square-o"></i></button></center></td>
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

      </script>

    </body>
  </html>

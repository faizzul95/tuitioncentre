<?php session_start(); 

if(isset($_SESSION['user_id'])) 
{
   $usid = $_SESSION['user_id'];
}
if(isset($_SESSION['student_id'])) 
{
   $student_id = $_SESSION['student_id'];
}

include_once("connection.php");
// $sql = "SELECT * FROM `tuition` WHERE `user_id` = '$usid'";
// $sql_usr = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
// $row = mysqli_fetch_array($sql_usr);

 $tuition_id = $_GET['tuition_id'];
 $subject_id = $_GET['subject_id'];

$sql = "SELECT * FROM `tuition` WHERE `tuition_id` = '$tuition_id'";
$sql_usr = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
$row = mysqli_fetch_array($sql_usr);

// $lastupdate = $row['parent_last_update'];
$email = $row['tuition_email'];
$telno = $row['tuition_telno'];
$name = $row['tuition_name'];
$address = $row['tuition_address'];
$tuition_img = $row['tuition_img'];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Package View</title>

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
        <div class="header-top-bar" style="line-height: 55px !important; font-family: Raleway, sans-serif !important;">
         <?php include 'header.php'; ?>
        </div>
        <!-- end .header-top-bar -->
      </header> <!-- end #header -->
      <div class="header-page-title job-registration clearfix">
        <div class="title-overlay"></div>
          <div class="container" style="line-height: 1.5 !important; font-family: Raleway, sans-serif !important;">
            <h1>Package View</h1>
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              
              <li class="active">Package View</li>
            </ol>
          </div> <!-- end .container -->
        </div>
      </div> <!-- end .header-page-title -->

      <div id="page-content" class="candidate-profile" style="line-height: 1.5 !important; font-family: Raleway, sans-serif !important;">
        <div class="container">
          <div class="page-content mt30 mb30">
            <div class="">
               <div class="tab-pane active" id="candidate-profile">
                <div class="row">
                  <div class="col-md-4">
                    <div class="motijob-sidebar">
                      <div class="candidate-profile-picture">
                        <!-- <img src="img/content/candidate-profile.jpg" alt=""> -->
                        <img src="profile_pic/<?php echo $tuition_img; ?>" alt="">
                        <!-- <div class="upload-img-field"> -->

                        <!-- </div> -->
                      </div> <!-- end .agent-profile-picture -->

                      <div class="candidate-general-info">
                        <div class="title clearfix">
                           <center><h6>Tuition Information</h6></center>
                        </div> <!-- end .end .title -->

                        <ul class="list-unstyled">
                          <li><strong>Name:</strong><?php echo $name; ?></li>
                          <li><strong>Email:</strong><?php echo $email; ?></li>
                          <li><strong>Address:</strong><?php echo $address; ?></li>
                          <li><strong>Tel No:</strong><?php echo $telno; ?></li>
                        </ul>

                      </div> <!-- end .candidate-general-info -->
                    </div>
                  </div> <!-- end .3col grid layout -->

                  <div class="col-sm-8 page-content">
                  <?php 

                  $sql = "SELECT `tuition`.*, `tuition_package`.* FROM `tuition`
                          INNER JOIN `tuition_package` ON `tuition`.`tuition_id` = `tuition_package`.`tuition_id`
                          INNER JOIN  `tuition_package_subject` ON `tuition_package`.`package_id` = `tuition_package_subject`.`package_id`
                          WHERE `tuition_package`.`tuition_id` = '$tuition_id' AND `tuition_package_subject`.`subject_id` = '$subject_id'";

                  $sql_tuition = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

                  if (mysqli_num_rows($sql_tuition)==0){
                         echo "No result found";
                   }
             
                  while($row = mysqli_fetch_assoc($sql_tuition))
                  { 
                    $area = $row['tuition_area'];
                    $id = $row['package_id'];
                    $name = $row['package_name'];
                    $capacity = $row['package_capacity'];
                    $price = $row['package_price'];
                    $telno = $row['tuition_telno'];
                    $tuitionName = $row['tuition_name'];
                  ?>
         
                    <div class="candidate-description client-description applicants-content">

                      <div class="language-print client-des clearfix">
                        <!-- end .aplicants-pic -->
                        <div class="clearfix">
                          <div class="pull-left">
                            <h5><?php echo $name ?></h5>
                            <b>Address :</b> <?php echo $area ?><br>
                            <b>Phone No :</b> <?php echo $telno ?><br>
                            <b>Student :</b> 
                  <?php //Open php

                    $count = 0;
                    $sql = mysqli_query($myConnection,"SELECT count(*) as C FROM `tuition_student_list` WHERE `package_id` = '$id'") or die (mysqli_error());//Select table from database
                    $row=mysqli_fetch_array($sql);
                    $count = $row['C'];
                    
                    echo "{$count} / {$capacity}<br>";
                  ?>

                            <b>Description :</b><br> 
                  <?php 
                    $sql = mysqli_query($myConnection,"SELECT * FROM `tuition_package_subject` INNER JOIN `master_subject` ON `master_subject`.`subject_id` = `tuition_package_subject`.`subject_id` WHERE `package_id` = '$id'") or die (mysqli_error());

                    while($row=mysqli_fetch_array($sql))
                    {
                        echo "<span style='margin-left: 40px'>{$row['subject_name']} : {$row['subject_day']}  ({$row['subject_start_hour']} to {$row['subject_end_hour']})</span><br>";
                    }
                  ?>
                            <br>
                            <b>PRICE :</b> RM <?php echo $price ?><br>
                          </div>
                        </div>
                      </div>
                  <!-- end .aplicant-details-show -->
                  
                  <?php

                  if (isset($_SESSION['user_type'])){
                    if ($_SESSION['user_type'] != 'tuition' && $_SESSION['user_type'] != 'admin')
                    {
                      $sql = "SELECT * FROM tuition_student_list WHERE `student_id` = '$student_id' AND `package_id` = '$id'";
                      $sql_applied = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
                      $check_applied = mysqli_num_rows($sql_applied);

                      if ($check_applied == 0){
                        if ($count < $capacity)
                        {
                        ?>
                          <button onclick="location.href='apply_package.php?package_id=<?php echo $id; ?>';" class="btn btn-info pull-right">Apply</button>
                        <?php
                        }
                        else
                        {
                          ?>
                          <button disabled class="btn btn-info pull-right">Full</button>
                          <?php
                        } 
                      }
                      else{
                        ?>
                          <button disabled class="btn btn-info pull-right">Applied</button>
                        <?php
                      }
                    }
                  }
                  else{
                    //if ($count < $capacity)
                    //{
                    ?>
                      <!-- <button onclick="location.href='apply_package.php?package_id=<?php echo $id; ?>';" class="btn btn-info pull-right">Apply</button> -->
                    <?php
                    //}
                    //else
                    //{
                      ?>
                      <button disabled class="btn btn-info pull-right">Please Log In</button>
                      <?php
                    //}
                  }

                    ?>
              </div> <!-- end .language-print -->

                

              <?php 
              }
              ?>
              <!-- end loop here -->
              </div> <!-- end .candidate-description -->

            </div> <!-- end .page-content -->

                    <div class="container">
                      <div class="page-content mt50">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="candidate-description">
                              <div class="candidate-details">
                                <div class="candidate-title">
                                <?php include 'review/index.php'; ?>
                                </div>
                              </div>
                            </div>
                          </div> <!-- end .3col grid layout -->
                        </div> <!-- end .row -->
                      </div> <!-- end .page-content -->
                    </div> <!-- end .container -->

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

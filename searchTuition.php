<?php 
session_start();
include("connection.php");
$user_id = $_SESSION['user_id'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tuition Search</title>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="main-wrapper" class="our-agents-content">

      <!-- HEADER -->
      <header id="header">
       <?php include 'header.php'; ?>
      </header>
      <!-- end #header -->

      <div class="header-page-title job-registration clearfix">
        <div class="title-overlay"></div>
        <div class="container">
          <h1>Tuition Search</h1>

          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Search</li>
          </ol>

        </div> <!-- end .container -->

      </div> <!-- end .header-page-title -->
      <!-- Page Content -->

      <div id="page-content" class="page-content pt60">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 page-sidebar">
              <aside>
                <div class="white-container mb0">
                  <div class="widget sidebar-widget jobs-search-widget">
                    <h5 class="widget-title">Search</h5> 
                    <div class="widget-content">
                      <span class="search-tex">I'm looking for a ...</span>
                    <form method="post" action="searchTuition.php">
                       <select name="area" class="form-control mt10 mb10" required>
                        <option value="">Select Area</option>
                            <?php
                              $sql = "SELECT * FROM `tuition`";
                              $sql_tuition = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
                              
                              while( $row = mysqli_fetch_array($sql_tuition) )
                              {
                                ?>
                                <option value="<?php echo $row['tuition_area']; ?>"><?php echo $row['tuition_area']; ?></option>
                                <?php
                              }
                            ?>
                          </select>
                      <br>

                      <select name="avg_rating" class="form-control mt10 mb10" required>
                        <option value="">Choose Rating</option>
                        <option value="0">No Star Yet</option>
                        <option value="1">1 Star</option>
                        <option value="2">2 Star</option>
                        <option value="3">3 Star</option>
                        <option value="4">4 Star</option>
                        <option value="5">5 Star</option>
                      </select>

                      <br>

                      <select name="available_subjects" class="form-control mt10 mb10" required>
                        <option value="">Select Subject</option>
                              <?php
                              $sql = "SELECT * FROM `master_subject`";
                              $sql_subject = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
                              
                              while( $row = mysqli_fetch_array($sql_subject) )
                              {
                                ?>
                                <option value="<?php echo $row['subject_name']; ?>"><?php echo $row['subject_name']; ?></option>
                                <?php
                              }
                              ?>
                      </select>

                      <br>

                      <input type="submit" name="view_tuition_center" class="btn btn-default" value="Search">
                    </div>
                    </form>
                  </div>
                </div>
              </aside>
            </div> <!-- end .page-sidebar -->

            <div class="col-sm-8 page-content">

              <div class="view-sort clearfix mb20">
                <div class="row">

                  <div class="col-sm-5 main-title">
                    <h3 class="client-registration-title">Available Tuition</h3>
                  </div>
                </div> <!-- end .row -->
              </div> <!-- end .view-sort div -->


              <!-- start loop here -->

              <?php 

              $area = $_POST['area'];
              $avg_rating = $_POST['avg_rating'];
              $available_subjects = $_POST['available_subjects'];

              // $sql = "SELECT * FROM `tuition` a INNER JOIN `tuition_package` b ON a.`tuition_id` = b.`tuition_id` WHERE `tuition_area` = '$area'";


              $sql = "SELECT `tuition`.*,`tuition_package`.* FROM `tuition` 
                          INNER JOIN  `tuition_package` ON `tuition`.`tuition_id` = `tuition_package`.`tuition_id`
                          WHERE `tuition_area` = '$area' AND package_subject LIKE '%{$available_subjects}%'";

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
                   $subject = $row['package_subject'];
                   $telno = $row['tuition_telno'];
                   $tuitionName = $row['tuition_name'];
                   // $tuitionName = $row['avg_rating'];

                   // var_dump($telno);die;
               ?>
         
              <div class="candidate-description client-description applicants-content">

                <div class="language-print client-des clearfix">
                  <!-- end .aplicants-pic -->
                  <div class="clearfix">
                    <div class="pull-left">
                      <h5><?php echo $name ?></h5>
                      <b>Address :</b> <?php echo $area ?><br>
                      <b>Phone No :</b> <?php echo $telno ?><br>
                      <b>Package Include :</b> <?php echo $subject ?><br>
                      <b>Price :</b> RM <?php echo $price ?><br>
                      <b>Rating :</b> <?php echo $rate ?>
                    </div>


                  </div>
                  <!-- end .aplicant-details-show -->
                  <button type="button" onclick="window.location='package_view.php?tuition_refer_code=<?php echo $row['tuition_refer_code'] ?>';" class="btn btn-default pull-right">View Package</button>

                  <!-- <button class="btn btn-default pull-right">Apply</button> -->
                </div> <!-- end .language-print -->

                
              </div> <!-- end .candidate-description -->

              <?php }
      // }
           ?>
              <!-- end loop here -->

             <!--  <div class="pagination-content clearfix">
                <p>Displaying 10 out of 50 items</p>

                <nav>
                  <ul class="list-inline">
                    <li><a class="btn btn-default first" href="#">first</a></li>
                    <li><a class="btn btn-default previous" href="#">Previous</a></li>
                    <li class="active"><a class="number" href="#">1</a></li>
                    <li><a class="number" href="#">2</a></li>
                    <li><a class="number" href="#">3</a></li>
                    <li><a class="number" href="#">4</a></li>
                    <li><a class="btn btn-default next" href="#">Next</a></li>
                    <li><a class="btn btn-default last" href="#">Last</a></li>
                  </ul>
                </nav>
              </div> -->
            </div> <!-- end .page-content -->
          </div>
        </div> <!-- end .container -->
      </div> <!-- end #page-content -->

      <!-- Footer Start -->
      <footer id="footer">
        <?php include 'footer.php'; ?>
      </footer>
      <!-- end #footer -->

    </div>
    <!-- end #main-wrapper -->

    <!-- Scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
      <script src="http://maps.google.com/maps/api/js?key=AIzaSyD0QI6vd531_4xsTobCg_J1_6BZOEolRbs&sensor=false&libraries=geometry&v=3.7"></script>
      <script src="js/maplace.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/jquery.ba-outside-events.min.js"></script>
      <script src="js/jquery.responsive-tabs.js"></script>
      <script src="js/jquery.flexslider-min.js"></script>
      <script src="js/jquery.fitvids.js"></script>
      <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
      <script src="js/jquery.inview.min.js"></script>

      <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
      <script src="js/scripts.js"></script>
    </body>
  </html>

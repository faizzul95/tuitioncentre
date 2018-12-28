<?php 
session_start();
include("connection.php");
if ( !isset( $_SESSION['user_id'] ) ){
  header('Location: login.php');
}

if(isset($_SESSION['user_id'])) 
{
   $user_id = $_SESSION['user_id'];
}

if(isset($_SESSION['student_id']) )
{
  $student_id = $_SESSION['student_id'];
}



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forum</title>

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
          <h1>Forum</h1>

          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Forum</li>
          </ol>

        </div> <!-- end .container -->

      </div> <!-- end .header-page-title -->
      <!-- Page Content -->

      <div id="page-content" class="page-content pt60" >
        <div class="container">
          <div class="row">
            <div class="col-sm-4 page-sidebar">
              <aside>
                <div class="white-container mb0">
                  <div class="widget sidebar-widget jobs-search-widget">
                    <h5 class="widget-title">Search</h5> 
                    <div class="widget-content">
                      <span class="search-tex">Create Forum</span>
                    <form method="post" action="controller.php">
                    	Title : <input type="text" name="forum_title" ><br>
                    	Description : <textarea rows="4" cols="50" name="forum_desc">
                    	</textarea><br>
                      <input type="submit" name="create_forum" value="Create Forum" class="btn btn-default">
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
                    <h3 class="client-registration-title">Available Forum</h3>
                  </div>
                </div> <!-- end .row -->
              </div> <!-- end .view-sort div -->


              <!-- start loop here -->

              <?php 

              // $sql = "SELECT * FROM `tuition` a INNER JOIN `tuition_package` b ON a.`tuition_id` = b.`tuition_id` WHERE `tuition_area` = '$area'";

              $sql = "SELECT * from `forum` INNER JOIN `user` ON `user`.`user_id` = `forum`.`forum_user`";

              $sql_forum = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

              if (mysqli_num_rows($sql_forum)==0){
                     echo "No Forum found";
               }
             // print_r($_SESSION);
             while($row = mysqli_fetch_assoc($sql_forum))
                { 
                  $forum_title = $row['forum_title'];
                  $forum_desc = $row['forum_desc'];
                  $forum_user = $row['forum_user'];
                  $forum_user_type = $row['user_type'];
                  $forum_user_id = $row['user_id'];
                  $forum_date = date( 'd M Y h:i A', strtotime($row['forum_date']) );
                  // echo $forum_user_type;

                  if($forum_user_type == 'student')
                  {
                      $sql_img = "SELECT * FROM `student` WHERE `user_id` = '$forum_user_id'";
                      $sql_img = mysqli_query($myConnection,$sql_img) or die(mysqli_error($myConnection));  

                      $row_img = mysqli_fetch_array($sql_img);
                      $img = $row_img['student_img'];
                  }
                  elseif ($forum_user_type == 'parent')
                  {
                      $sql_img = "SELECT * FROM `parent` WHERE `user_id` = '$forum_user_id'";
                      $sql_img = mysqli_query($myConnection,$sql_img) or die(mysqli_error($myConnection));  

                      $row_img = mysqli_fetch_array($sql_img);
                      $img = $row_img['parent_img'];
                  }
                  else
                  {
                      $sql_img = "SELECT * FROM `tuition` WHERE `user_id` = '$forum_user_id'";
                      $sql_img = mysqli_query($myConnection,$sql_img) or die(mysqli_error($myConnection));  

                      $row_img = mysqli_fetch_array($sql_img);
                      $img = $row_img['tuition_img']; 
                  }

                  if($forum_user == $_SESSION['user_id'])
                  {
                    $username = 'You';
                  }
                  else
                  {
                    $username = $row['user_username'];
                  }
               ?>
         
              <div class="candidate-description client-description applicants-content">
                <div class="language-print client-des clearfix">
                <div class="aplicants-pic">
                    <img src="profile_pic/<?php echo $img; ?>" class="img-rounded">
                </div>
                  <!-- end .aplicants-pic -->
                  <div class="clearfix">
                    <div class="pull-left">
                      <h5><?php echo $forum_title ?></h5>
                      <b>By :</b> <?php echo $username ?><br>
                      <b>Description :</b> <?php echo $forum_desc ?><br>
                      <b>Date :</b> <?php echo $forum_date ?>
                    </div>


                  </div>
                  <!-- end .aplicant-details-show -->
                  <?php
                  if($forum_user == $_SESSION['user_id'])
                  {
                  	?>
                  		<button name="del_forum" onclick="window.location='controller.php?DEL_FORUM=<?php echo $row['forum_id']; ?>';" class="btn btn-danger pull-right">Delete</button>&nbsp
                  	<?php
                  }
                  ?>
                  <button type="button" onclick="window.location='forum_detail.php?forum_id=<?php echo $row['forum_id'] ?>';" class="btn btn-default pull-right">View Forum</button>&nbsp

                  <!-- <button class="btn btn-default pull-right">Apply</button> -->
                </div> <!-- end .language-print -->

                
              </div> <!-- end .candidate-description -->

              <?php }  ?>
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

<?php session_start(); 

if(isset($_SESSION['user_id'])) 
{
  if($_SESSION['user_type']=="parent") 
  {
    if(isset($_GET['student_id']))
    {
     $_SESSION['student_id'] = $_GET['student_id'];
    }
  }
}

if(isset($_SESSION['student_id']))
{
  $student_id = $_SESSION['student_id'];
}

if( isset($_GET['check']) )
{
    $ch = $_GET['check'];
    $lat = $_GET['lat'];
    $lon = $_GET['lon'];

    // echo $lat."<br>";
    // echo $lon."<br>";
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to Tuition Center</title>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <?php include("connection.php"); ?>
    <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="main-wrapper" class="our-agents-content">

      <!-- HEADER -->
      <?php include 'header.php'; ?>
      <!-- end #header -->

      <!-- Page Content -->
      <div id="page-content" style="line-height: 1.5 !important;">

        <div class="index-page-search-content">
          <div id="owl-demo" class="owl-carousel owl-theme">

           <div class="item"
              style="background: url('./img/library111.jpg') center center no-repeat; background-size: cover;"></div>
            <div class="item"
              style="background: url('./img/nii.jpg') center center no-repeat; background-size: cover;"></div>
            <div class="item"
              style="background: url('./img/home-bg3.jpg') center center no-repeat; background-size: cover;"></div>

          </div>
          <div class="container"  style="line-height: 1.5 !important;">
            <div class="search-holder">
              <h1><img src="img/logo1.png" alt="" width="180" height="180">TUITION CENTRE</h1>
              <h2>SEARCH AVAILABLE TUITION CENTRE</h2>
              
              <div id="header-search">
                <div class="header-search-bar">
                  <div class="">
                    <form method="post" action="searchTuition.php">
                      <div class="basic-form clearfix">
                        <div class="hsb-input-1">
                        
                        
                        <input type="hidden" name="lat" value="<?php echo $lat; ?>">
                          <input type="hidden" name="lon" value="<?php echo $lon; ?>">
                          <select name="area" required>
                            <!-- <option value="">Select Area</option> -->
                            <?php
                              $sql = "SELECT `geoloc`.*, sqrt( power({$lat}-`geoloc`.`geo_lat`,2) + power({$lon}-`geoloc`.`geo_lon`,2) ) as dist FROM `geoloc` WHERE `geoloc`.`geo_city` IN (SELECT distinct `tuition_area` FROM `tuition`) ORDER BY dist ASC";
                              $sql_geo = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
                              // $row_geo = mysqli_fetch_all($sql_geo,MYSQLI_ASSOC);

                              // $sql = "SELECT distinct `tuition_area` FROM `tuition`";
                              // $sql_tuition = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
                              $distinct_area = [];
                              while( $row = mysqli_fetch_array($sql_geo) )
                              {
                                $area = $row['geo_city'];
                                if( !in_array($area, $distinct_area) )
                                {
                                ?>
                                  <option value="<?php echo $area; ?>"><?php echo $area; ?></option>
                                <?php
                                  $distinct_area[] = $area;  
                                }
                              }
                            ?>
                            <!-- <option value="">Choose Location In Shah Alam</option>
                            <option value="Seksyen 7">Seksyen 7</option>
                            <option value="Sekyesn 13">Sekyesn 13</option>
                            <option value="Seksyen 9">Seksyen 9</option> -->
                          </select>
                          <!-- <button onclick="find_loc()">Check Location</button> -->
                        </div>
                        <div class="hsb-container">
                          <div class="hsb-input-2">
                            <select name="avg_rating" required>
                                  <option value="">Choose Rating</option>
                                  <option value="0">No Star Yet</option>
                                  <option value="1">1 Star</option>
                                  <option value="2">2 Star</option>
                                  <option value="3">3 Star</option>
                                  <option value="4">4 Star</option>
                                  <option value="5">5 Star</option>
                                </select>
                          </div>
                          <div class="hsb-select">
                            <select name="available_subjects" class="form-control" required>
                              <option value="">Select Subject</option>
                              <?php
                              $sql = "SELECT * FROM `master_subject`";
                              $sql_subject = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
                              
                              while( $row = mysqli_fetch_array($sql_subject) )
                              {
                                ?>
                                <option value="<?php echo $row['subject_id']; ?>"><?php echo $row['subject_name']; ?></option>
                                <?php
                              }
                              ?>

                             <!--  <option value="Bahasa Melayu">Bahasa Melayu</option>
                              <option value="Bahasa Inggeris">Bahasa Inggeris</option>
                              <option value="Sains">Sains </option>
                              <option value="Matematik">Matematik</option>
                              <option value="Sejarah">Sejarah </option>
                              <option value="Geografi">Geografi </option>
                              <option value="Pendidikan Islam">Pendidikan Islam </option>
                              <option value="Kemahiran Hidup">Kemahiran Hidup</option> -->
                            </select>
                          </div>
                        </div>
                        <div class="hsb-submit"  style="line-height: 1.5 !important;">
                          <!-- <button style="width:100%;" name="view_tuition_center" class="login100-form-btn">Submit</button> -->
                          <input type="submit" name="view_tuition_center" value="Search" class="btn btn-default" style="height: 40px; width: 100px">
                          <span id='check_loc' hidden><?php echo $ch; ?></span><br>

                          <!-- <button type="submit" name="view_tuition_center" class="btn btn-default btn-block"><i class="fa fa-search"></i><span>Search</span></button> -->
                          <!-- <a href="search.php">Search</a> -->
                        </div>
                      </div>
                    </form>
                   </div>
                </div>
              </div>
            </div>
          </div>
 </div>

        <!-- end .container -->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-left">
      <br><br><center><h2><b>Are you looking for tuition centre? or are you provide tuition centre services?</b> <span></span></h2></center>
      <p><br>
      <u><b><h2>Parents/Students</u></b></h2>
      <img src="img/ibu.jpg" alt="" width="400" height="300"></a><h5>Are you looking for a tuition centre? We have lots of tuition centre for your selection. You can search according to subject and nearest location.</h5><br><br>
      <u><b><h2> Tuition centre</u></b></h2>
      <img src="img/tuitionce.jpg" alt="" width="400" height="300"></a>
     <h5>Would you like to get more exposure for your tuition centre? </h5><br><br>
      
      </p>
    </div>
    <div class="row"> 
</div>
      </div>

      <!-- Footer Start -->
     <?php include 'footer.php'; ?>
      <!-- end #footer -->

    </div>
    <!-- end #main-wrapper -->

    <!-- Scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/jquery.ba-outside-events.min.js"></script>
      <script src="js/jquery.responsive-tabs.js"></script>
      <script src="js/jquery.flexslider-min.js"></script>
      <script src="js/jquery.fitvids.js"></script>
      <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
      <script src="js/jquery.inview.min.js"></script>

      <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/scripts.js"></script>
      
    <script type="text/javascript">
      $( document ).ready(function (){
          if ( $('#check_loc').text() != 'fal' ){
              if (navigator.geolocation){
                navigator.geolocation.getCurrentPosition(get_loc);
              }
              else{
                alert("Geolocation is not supported by this browser.");
              }
          }

      })

      function get_loc(position){
          var lat = position.coords.latitude;
          var lon = position.coords.longitude;
          // alert(lat);

          window.location.href = "index.php?check=fal&lat="+lat+"&lon="+lon;
      }

    </script>
    
    
    </body>
  </html>



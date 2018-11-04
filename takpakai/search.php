<?php 
session_start();
include("connection.php"); 
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

      <!-- header Search bar -->



      <!-- end .header-banner -->

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
                    <form method="post" action="search.php">
                      <select name="area" class="form-control mt10 mb10" required>
                        <option value="">Choose Location In Shah Alam</option>
                        <option value="Seksyen 7">Seksyen 7</option>
                        <option value="Sekyesn 13">Sekyesn 13</option>
                        <option value="Seksyen 9">Seksyen 9</option>
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
                         <option value="">Choose Subject</option>
                         <option value="Bahasa Melayu">Bahasa Melayu</option>
                         <option value="Bahasa Inggeris">Bahasa Inggeris</option>
                         <option value="Sains">Sains </option>
                         <option value="Matematik">Matematik</option>
                         <option value="Sejarah">Sejarah </option>
                         <option value="Geografi">Geografi </option>
                         <option value="Pendidikan Islam">Pendidikan Islam </option>
                         <option value="Kemahiran Hidup">Kemahiran Hidup</option>
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
              if(isset($_POST['view_tuition_center'])){
            
              $area = $_POST['area'] ;
          $avg_rating = $_POST['avg_rating'] ;
          $available_subjects = $_POST['available_subjects'] ;
          }
          
          $q = "SELECT * 
          From tuition_list 
          where area = '$area' 
          and avg_rating = '$avg_rating' 
          and available_subjects LIKE '%{$available_subjects}%'
          and status='1'
          ";
          $r = @mysql_query("$q");
          if (@mysql_num_rows($r)==0) 
                    {
            echo "No result found";
          }
          else
          {
          if($r)
          {
          while($row=@mysql_fetch_array($r))
          { 
         ?>
          <?php do { ;?>


              <div class="candidate-description client-description applicants-content">

                <div class="language-print client-des clearfix">
                  <!-- end .aplicants-pic -->
                  <div class="clearfix">
                    <div class="pull-left">
                      <h5><?php echo $row['tuition_centre_name'] ?></h5>
                      <b>Address :</b> <?php echo $row['address'] ?><br>
                      <b>Phone No :</b> <?php echo $row['tuition_phone'] ?>
                    </div>


                  </div>
                  <!-- end .aplicant-details-show -->
                  <button type="button" onclick="window.location='package_view.php?tuition_refer_code=<?php echo $row['tuition_refer_code'] ?>';" class="btn btn-default pull-right">View Package</button>

                  <!-- <button class="btn btn-default pull-right">Apply</button> -->
                </div> <!-- end .language-print -->

                
              </div> <!-- end .candidate-description -->

              <?php }while($row=mysql_fetch_array($r));}} } ?>

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

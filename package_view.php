<?php
    session_start();
    echo "<h3> PHP List All Session Variables</h3>";
    foreach ($_SESSION as $key=>$val)
    echo $key." = ".$val."<br/>";
?>
<?php include("connection.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="review/style.css">
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
        <?php include 'header.php'; ?>
      </header>
      <!-- end #header -->

      <div class="header-page-title job-registration clearfix">
        <div class="title-overlay"></div>
        <div class="container">
          <h1>Tuition Package</h1>

          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="search.php">Search</a></li>
            <li class="active">List Of Package</li>
          </ol>

        </div> <!-- end .container -->

      </div> <!-- end .header-page-title -->



      <div id="page-content" class="candidate-profile">
        <div class="container">
          <div class="page-content mt50">

            <div class="row">
              <div class="col-md-4">
                <div class="motijob-sidebar">
                <div class="candidate-profile-picture">
                  <img src="img/content/job-preview.jpg" alt="">

                  <a href="#" class="job-name">Wells Fargo</a>
                </div> <!-- end .agent-profile-picture -->

                
              </div>
              </div> <!-- end .3col grid layout -->

            <?php 
            $tuition_refer_code= $_GET['tuition_refer_code'] ;
            
            $q = "SELECT * 
            From tuition_package 
            where tuition_refer_code='$tuition_refer_code'
            And status ='1' ";
            $r = mysql_query("$q");
            if($r)
            {
            while($row=mysql_fetch_array($r))
            { ?>
            <?php do { ;?>

              <div class="col-md-8">
                <div class="candidate-description">

                  <div class="candidate-details">
                    <div class="candidate-title">
                      <h5><?php echo $row['package_name'] ?></h5>
                    </div>
                   <b>Detail : </b> <?php echo $row['package_detail'] ?><br>
                   <b>Student :</b> <?php echo $row['package_student_no'] ?> / <?php echo $row['package_max_no'] ?><br>
                   <h5>Price : <?php echo $row['package_price'] ?></h5><br>

                   <form method="post" action="connection.php" enctype="multipart/form-data">
            
                    <?php if (isset($_SESSION['id'])) 
                                {
                                ?>
                    <!-- <input type="hidden"  name="ic_no" value='<?php echo $ic_no; ?>' > -->
                    <input type="hidden"  name="package_refer_code" value='<?php echo $row['package_refer_code'] ?>' >
                    <button name="apply_package" class="btn btn-info">Apply</button>
                    <?php 
                                }
                    else
                    {
                                ?>
   
                    <input type="button" value="Register" class="btn btn-info"
onClick="document.location.href='register_package.php'" /> Please Login First Before Apply

                    <?php 
                                }
                    ?>
                    </form>
                    <hr>

                  </div> <!-- end .candidate-details -->
                </div> <!-- end .candidate-description -->
              </div> <!-- end .9col grid layout -->


            <?php }while($row=mysql_fetch_array($r));}} ?>

            </div> <!-- end .row -->



          </div> <!-- end .page-content -->
        </div> <!-- end .container -->

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
        
      </div> <!-- end #page-content -->

      <footer id="footer">
        <?php include 'footer.php'; ?>
      </footer> <!-- end #footer -->

    </div> <!-- end #main-wrapper -->

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
      <script src="js/scripts.js"></script>



    </body>
  </html>

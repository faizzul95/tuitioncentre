<?php session_start(); 
include_once("connection.php");

if(isset($_GET['package_id']))
{
  $package_id = $_GET['package_id'];

  $sql = "SELECT `tuition_id` FROM `tuition_package` WHERE `package_id` = '$package_id'";
  $sql_tuition = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $row = mysqli_fetch_array($sql_tuition); 
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
    <title>Review Package</title>

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
          <h1>Review Package</h1>

          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="student_profile.php">Student Profile</a></li>
            <li class="active">Review Package</li>
          </ol>

        </div> <!-- end .container -->

      </div> <!-- end .header-page-title -->

      <div id="page-content" class="job-registration job-registration full-width">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 page-content mt30">
              <div class="">
                <div class="tab-pane active" id="agency-profile-tab">


                  <h4 class=" client-registration-title">Review Package</h4>

                  <div class="information-form">
                    <div class="table-responsive">
                      <form action="controller.php" class="default-form" method="post">
                       
                        <div class="single-content">
                          <label><span>*</span>Rate this Package</label>
                          <div class="company-name">
                            <button type="button" class="btn-sm" aria-label="Left Align" id="1" onclick="star(1)">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn-sm" aria-label="Left Align" id="2" onclick="star(2)">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn-sm" aria-label="Left Align" id="3" onclick="star(3)">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn-sm" aria-label="Left Align" id="4" onclick="star(4)">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn-sm" aria-label="Left Align" id="5" onclick="star(5)">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </button>
                            <input type="hidden" name="starRate" id="starRate">
                          </div>
                        </div>

                        <div class="single-content">
                          <label><span>*</span>Title :</label>
                          <div class="company-name">
                            <input type="text" name="review_title" required>
                          </div>
                        </div>

                        <div class="single-content">
                          <label><span>*</span>Comment :</label>
                          <div class="company-name">
                            <!-- <textarea rows="5" name="review_comment" required></textarea> -->
                            <input type="text" name="review_comments">
                          </div>
                        </div>

                        <input type="hidden" name="tuition_id" value="<?php echo $tuition_id; ?>" >
                        <input type="hidden" name="package_id" value="<?php echo $package_id; ?>">
                        <!-- <input type="submit" name="add_package" value="Add Package">  -->
                         <div class="submit-preview-buttons">
                            <!-- <a href="#" >Confirm</a> -->
                            <input type="submit" name="review_package" class="btn btn-default pull-right" value="Review Package"><br><br><br>
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
    </div><

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

      function star(starNo)
      {
        var i;
        for(i=1; i<=5; i++)
        {
          if (i <= starNo)
          {
            e = document.getElementById(i);
            e.className = "btn-sm active btn-warning";
          }
          else
          {
            e = document.getElementById(i);
            e.className = "btn-sm"; 
          }
        }
        document.getElementById("starRate").value = starNo;
      }
    </script>

  </body>
</html>

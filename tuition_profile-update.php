<?php 

  session_start(); 

  $user_id = $_SESSION['user_id'];
  include_once("connection.php");
 
  $tuition_id = $_SESSION['tuition_id'];
  $sql = "SELECT * FROM `tuition` WHERE `tuition_id` = '$tuition_id'";
  $sql_tuition = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $row = mysqli_fetch_array($sql_tuition);

  $tuition_name = $row['tuition_name'];
  $tuition_telno = $row['tuition_telno'];
  $tuition_email = $row['tuition_email'];
  $tuition_add = $row['tuition_address'];
  $tuition_state = $row['tuition_state'];
  $tuition_area = $row['tuition_area'];
 
 // $lastupdate = $row['student_last_update'];

 // if($lastupdate == NULL) 
 //       {
 //           header("Location:student_profile.php?id=$user_id");  
 //       }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Profile Update || Tuition</title>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">

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
      <div class="header-page-title clearfix">
        <div class="title-overlay"></div>
        <div class="container">
          <h1>Profile Update</h1>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Profile Update</li>
          </ol>
        </div> <!-- end .container -->

      </div> <!-- end .header-page-title -->

      <div id="page-content">
        <div class="container">
          <div class="page-content">
            <div class="">

              <!--<ul class="nav nav-tabs">-->
                <!--<li class="active"><a href="#candidate-profile">Porfile</a></li>-->
                <!--<li><a href="#candidate-cv">CV</a></li>-->
                <!--<li><a href="#candidate-documents">Documents</a></li>-->
                <!--<li><a href="#candidate-protfolio">Portfolio</a></li>-->
                <!--<li><a href="#candidate-blog">Blog</a></li>-->
                <!--<li><a href="#candidate-contacts">Contacts</a></li>-->
                <!--</ul>-->

              <div class="tab-content">
                <div class="tab-pane active mt20" id="candidate-profile">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="motijob-sidebar">
                      <div class="candidate-profile-picture">

                        <div class="upload-img-field">

                        </div>

                        <a class="btn btn-default" href="#">Upload a Picture</a>
                      </div> <!-- end .agent-profile-picture -->

                      <div class="candidate-general-info">
                        <form action="#">
                          <div class="title clearfix">
                            <h6>General Information</h6>
                            <!-- <a class="pull-right" href="#"><i class="fa fa-edit"></i>Edit</a> -->
                          </div> <!-- end .end .title -->

                          <ul class="list-unstyled candidate-registration">
                            <li><strong>Tuition Name:</strong><input type="text" placeholder="[first name] [last name]" value="<?php echo $tuition_name; ?>"></li>
                            <li><strong>Telno:</strong><input type="text" placeholder="[gender]" value="<?php echo $tuition_telno; ?>"></li>
                            <li><strong>Email:</strong><input type="text" placeholder="[date of birth]" value="<?php echo $tuition_email; ?>"></li>
                            <li><strong>Address:</strong><input type="text" placeholder="[telephone number]" value="<?php echo $tuition_add; ?>"></li>
                            <li><strong>State:</strong><input type="text" placeholder="[email address]" value="<?php echo $tuition_state; ?>"></li>
                            <li><strong>Area:</strong><input type="text" placeholder="[email address]" value="<?php echo $tuition_area; ?>"></li>
                          </ul>
                        </form>

                      </div> <!-- end .candidate-general-info -->
                    </div>
                    </div> <!-- end .3col grid layout -->
                    <div class="col-md-8">
                      <div class="job-reg-form">
                        <form action="controller.php" method="post">
                          
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                          <div class="candidate-single-content">
                            <div class="row">
                              <div class="col-md-4">
                                <label><span>*</span>Personal Info</label>
                              </div> <!-- end .4th grid-layout -->

                              <div class="col-md-8">
                                <div class="candidate-skill-single clearfix">
                                    <div class="skill-selectbox mb10">
                                      <input type="text" name="tuition_name" placeholder="Tuition Name" required value="<?php echo $tuition_name; ?>">
                                    </div> <!-- end .skill-selectbox -->
                                    <div class="skill-selectbox mb10">
                                      <input type="text" name="tuition_add" placeholder="Address" required value="<?php echo $tuition_add; ?>">
                                    </div> <!-- end .skill-selectbox -->
                                    <div class="skill-selectbox mb10">
                                      <input type="text" name="tuition_telno" placeholder="Phone Number" required value="<?php echo $tuition_telno; ?>">
                                    </div> <!-- end .skill-selectbox -->
                                    <div class="skill-selectbox mb10">
                                      <input type="text" name="tuition_email" placeholder="Email Address" required value="<?php echo $tuition_email; ?>">
                                    </div> <!-- end .skill-selectbox -->
                                    <div class="skill-selectbox mb10">
                                      <select name="tuition_state">
                                        <option value="">Choose State</option>
                                        <option value="JOHOR">JOHOR</option>
                                        <option value="KEDAH">KEDAH</option>
                                        <option value="KELANTAN">KELANTAN</option>
                                        <option value="LABUAN">LABUAN</option>
                                        <option value="MELAKA">MELAKA</option>
                                        <option value="NEGERI SEMBILAN">NEGERI SEMBILAN</option>
                                        <option value="PERAK">PERAK</option>
                                        <option value="PAHANG">PAHANG</option>
                                        <option value="PERLIS">PERLIS</option>
                                        <option value="PULAU PINANG">PULAU PINANG</option>
                                        <option value="SABAH">SABAH</option>
                                        <option value="SARAWAK">SARAWAK</option>
                                        <option value="SELANGOR">SELANGOR</option>
                                        <option value="TERENGGANU">TERENGGANU</option>
                                      </select>
                                    </div> <!-- end .skill-selectbox -->
                                    <div class="skill-selectbox mb10">
                                      <input type="text" name="tuition_area" placeholder="Area" class="form-control" required value="<?php echo $tuition_area; ?>"> 
                                    </div> <!-- end .skill-selectbox -->
                                    
                                </div> <!-- end .candidate-skills-single -->


                              </div> <!-- end .8th grid layout -->
                            </div> <!-- end nasted .row -->
                          </div> <!-- end .candidate-single-content -->

                          <div class="save-cancel-button ml20">
                            <!-- <a href="#" class="btn btn-default">Save</a> -->
                            <input type="submit" name="update_tuition" value="Submit" class="form-control btn btn-default">
                          </div> <!-- end .save-cancel-button -->
                        </form>
                      </div> <!-- end .candidate-reg-form -->
                    </div> <!-- end .9col grid layout -->

                  </div> <!-- end .row -->
                </div> <!-- end .tabe pane -->

              </div> <!-- end .tab-content -->
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

        bkLib.onDomLoaded(function() {
          nicEditors.editors.push(
            new nicEditor().panelInstance(
              document.getElementById('myNicEditor')
            )
          );
        });



      </script>

    </body>
  </html>

<?php 

 session_start(); 

 $parent_user_id = $_SESSION['user_id'];
 include_once("connection.php");
 // $sql = "SELECT * FROM `student` WHERE `user_id` = '$user_id'";
 // $sql_usr = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
 // $row = mysqli_fetch_array($sql_usr);

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

    <title>Register Child || Student</title>

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
          <h1>Register Child</h1>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Register Child</li>
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
                            <li><strong>Name:</strong><input type="text" placeholder="[first name] [last name]"></li>
                            <li><strong>Gender:</strong><input type="text" placeholder="[gender]"></li>
                            <li><strong>Date of Birth:</strong><input type="text" placeholder="[date of birth]"></li>
                            <li><strong>Tel:</strong><input type="text" placeholder="[telephone number]"></li>
                            <li><strong>Mob:</strong><input type="text" placeholder="[mobile number]"></li>
                            <li><strong>Email:</strong><input type="text" placeholder="[email address]"></li>
                          </ul>
                        </form>

                      </div> <!-- end .candidate-general-info -->
                    </div>
                    </div> <!-- end .3col grid layout -->

                    <div class="col-md-8">
                      <div class="job-reg-form">
                        <form action="controller.php" method="post">
                          
                        <input type="hidden" name="parent_user_id" value="<?php echo $_SESSION['user_id']; ?>">
                          <div class="candidate-single-content">
                            <div class="row">
                              <div class="col-md-4">
                                <label><span>*</span>Personnal Info</label>
                              </div> <!-- end .4th grid-layout -->

                              <div class="col-md-8">
                                <div class="candidate-skill-single clearfix">
                                    <div class="skill-selectbox mb10">
                                      <input type="text" name="std_name" placeholder="Full Name" required>
                                    </div> <!-- end .skill-selectbox -->
                                    <div class="skill-selectbox mb10">
                                      <input type="text" name="std_ic" placeholder="Identity Card" required>
                                    </div> <!-- end .skill-selectbox -->
                                     <div class="skill-selectbox mb10">
                                      <input type="date" name="std_dob" placeholder="Date Of Birth" class="form-control" required>
                                    </div> <!-- end .skill-selectbox -->
                                    <div class="skill-selectbox mb10">
                                      <input type="text" name="std_telno" placeholder="Phone Number" required>
                                    </div> <!-- end .skill-selectbox -->
                                    <div class="skill-selectbox mb10">
                                      <input type="text" name="std_email" placeholder="Email Address" required>
                                    </div> <!-- end .skill-selectbox -->
                                    <div class="skill-selectbox mb10">
                                      <select name="student_gender">
                                        <option value="">-- Please Select --</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                      </select>
                                    </div> <!-- end .skill-selectbox -->
                                </div> <!-- end .candidate-skills-single -->


                              </div> <!-- end .8th grid layout -->
                            </div> <!-- end nasted .row -->
                          </div> <!-- end .candidate-single-content -->

                          <div class="save-cancel-button ml20">
                            <!-- <a href="#" class="btn btn-default">Save</a> -->
                            <input type="submit" name="reg_child" value="Submit" class="form-control btn btn-default">
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

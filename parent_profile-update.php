<?php 

  session_start(); 
  include_once("connection.php");
if ( !isset( $_SESSION['user_id'] ) ){
  header('Location: login.php');
}

  $user_id = $_SESSION['user_id'];

  $sql = "SELECT * FROM `parent` WHERE `user_id` = '$user_id'";
  $sql_usr = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

  if (mysqli_num_rows($sql_usr)>0)
  {
    $row = mysqli_fetch_array($sql_usr);

    $parent_id = $row['parent_id'];
    $parent_name = $row['parent_name'];
    $parent_ic = $row['parent_ic'];
    $parent_telno = $row['parent_telno'];
    $parent_email = $row['parent_email'];
    $parent_dob = $row['parent_dob'];
    $parent_gender = $row['parent_gender'];
    $parent_img = $row['parent_img'];
  }
  else
  {
    $parent_name = '';
    $parent_ic = '';
    $parent_telno = '';
    $parent_email = '';
    $parent_dob = '';
    $parent_gender = ''; 
    $parent_img = 'user.png';
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Profile Update || Parent</title>

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
        <div class="container" style="line-height: 1.5 !important;">
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
                        <img src="profile_pic/<?php echo $parent_img; ?>" alt="">
                       <!--  <div class="upload-img-field">

                        </div> -->

                        <!-- <a class="btn btn-default" href="controller.php?UPLOAD_PIC=<?php echo $user_id; ?>&PARENT=<?php echo $parent_id; ?>">Upload a Picture</a> -->
                      </div> <!-- end .agent-profile-picture -->

                      <div class="candidate-general-info"  style="line-height: 1.5 !important;">
                        <form action="#">
                          <div class="title clearfix">
                            <h6>General Information</h6>
                            <!-- <a class="pull-right" href="#"><i class="fa fa-edit"></i>Edit</a> -->
                          </div> <!-- end .end .title -->

                          <ul class="list-unstyled candidate-registration">
                            <li><strong>Name:</strong><input type="text" placeholder="[first name] [last name]" value="<?php echo $parent_name; ?>"></li>
                            <li><strong>Gender:</strong><input type="text" placeholder="[gender]" value="<?php echo $parent_gender; ?>"></li>
                            <li><strong>Date of Birth:</strong><input type="text" placeholder="[date of birth]" value="<?php echo $parent_dob; ?>"></li>
                            <li><strong>Tel:</strong><input type="text" placeholder="[telephone number]" value="<?php echo $parent_telno; ?>"></li>
                            <li><strong>Email:</strong><input type="text" placeholder="[email address]" value="<?php echo $parent_email; ?>"></li>
                          </ul>
                        </form>

                      </div> <!-- end .candidate-general-info -->
                    </div>
                    </div> <!-- end .3col grid layout -->

                    <div class="col-md-8">
                      <div class="job-reg-form"  style="line-height: 1.5 !important;">
                        <form action="controller.php" method="post" enctype="multipart/form-data" >
                          
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                          <div class="candidate-single-content">
                            <div class="row">
                              <div class="col-md-4">
                                <label><span>*</span>Personal Info</label>
                              </div> <!-- end .4th grid-layout -->

                              <div class="col-md-8">
                                <div class="candidate-skill-single clearfix">
                                    <div class="skill-selectbox mb10">
                                      <input type="text" name="prt_name" placeholder="Full Name" required value="<?php echo $parent_name; ?>">
                                    </div> <!-- end .skill-selectbox -->
                                    <div class="skill-selectbox mb10">
                                      <input type="text" name="prt_ic" placeholder="Identity Card" required value="<?php echo $parent_ic; ?>">
                                    </div> <!-- end .skill-selectbox -->
                                     <div class="skill-selectbox mb10">
                                      <input type="date" name="prt_dob" placeholder="Date Of Birth" class="form-control" required value="<?php echo $parent_dob; ?>">
                                    </div> <!-- end .skill-selectbox -->
                                    <div class="skill-selectbox mb10">
                                      <input type="text" name="prt_telno" placeholder="Phone Number" required value="<?php echo $parent_telno; ?>">
                                    </div> <!-- end .skill-selectbox -->
                                    <div class="skill-selectbox mb10">
                                      <input type="text" name="prt_email" placeholder="Email Address" required value="<?php echo $parent_email; ?>">
                                    </div> <!-- end .skill-selectbox -->
                                    <div class="skill-selectbox mb10">
                                      <span style="float: left">Upload Profile Picture : &nbsp &nbsp</span><input type="file" name="pro_pic" placeholder="Profile Picture">
                                    </div> <!-- end .skill-selectbox -->
                                    <div class="skill-selectbox mb10">
                                      <select name="prt_gender">
                                        <!-- <option value="">-- Please Select --</option> -->
                                        <?php
                                          if ($parent_gender == 'male')
                                          {
                                          ?>
                                            <option value="male" selected>Male</option>
                                            <option value="female">Female</option>
                                          <?php
                                          }
                                          else
                                          {
                                          ?>
                                            <option value="male">Male</option>
                                            <option value="female" selected>Female</option>
                                          <?php
                                          }
                                          ?>
                                      </select>
                                      </select>
                                    </div> <!-- end .skill-selectbox -->
                                </div> <!-- end .candidate-skills-single -->
                                <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

                              </div> <!-- end .8th grid layout -->
                            </div> <!-- end nasted .row -->
                          </div> <!-- end .candidate-single-content -->

                          <div class="save-cancel-button ml20">
                            <!-- <a href="#" class="btn btn-default">Save</a> -->
                            <input type="submit" name="reg_prt_info" value="Submit" class="form-control btn btn-default">
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

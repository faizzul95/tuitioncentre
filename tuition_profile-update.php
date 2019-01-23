<!doctype html>
<html lang="en">

<?php 

  session_start(); 
  include_once("connection.php");
  if ( !isset( $_SESSION['user_id'] ) ){
    header('Location: login.php');
  }
  
  $user_id = $_SESSION['user_id'];
 
  $tuition_id = $_SESSION['tuition_id'];
  $sql = "SELECT * FROM `tuition` WHERE `tuition_id` = '$tuition_id'";
  $sql_tuition = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $row = mysqli_fetch_array($sql_tuition);

  $tuition_name = $row['tuition_name'];
  $tuition_telno = $row['tuition_telno'];
  $tuition_email = $row['tuition_email'];
  $tuition_add = $row['tuition_address'];
  $tuition_state = $row['tuition_state'];
  $tuition_dist = $row['tuition_district'];
  $tuition_area = $row['tuition_area'];
  $tuition_img = $row['tuition_img'];
 
?>

<?php
  $sql = "SELECT * from geoloc";
  $sql_geo = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $row_geo = mysqli_fetch_all($sql_geo,MYSQLI_ASSOC);

  $sql = "SELECT distinct `geo_state` from geoloc order by `geo_state` asc";
  $sql_state = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $states = mysqli_fetch_all($sql_state,MYSQLI_ASSOC);
  // print_r($state);
  $sql = "SELECT distinct `geo_dist` from geoloc order by `geo_dist` asc";
  $sql_dist = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $dist = mysqli_fetch_all($sql_dist,MYSQLI_ASSOC);

  $sql = "SELECT distinct `geo_city` from geoloc order by `geo_city` asc";
  $sql_city = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $city = mysqli_fetch_all($sql_city,MYSQLI_ASSOC);
?>

<script type="text/javascript">
  var row_geo = <?php echo json_encode($row_geo); ?>;
  var states = <?php echo json_encode($states); ?>;
  var dist = <?php echo json_encode($dist); ?>;
  var city = <?php echo json_encode($city); ?>;
</script>

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
          <div class="page-content"  style="line-height: 1.5 !important;">
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
                        <img src="profile_pic/<?php echo $tuition_img; ?>" alt="">
                       <!--  <div class="upload-img-field">

                        </div> -->

                        <!-- <a class="btn btn-default" href="controller.php?UPLOAD_PIC=<?php echo $user_id; ?>&TUITION=<?php echo $tuition_id; ?>">Upload a Picture</a> -->
                      </div> <!-- end .agent-profile-picture -->

                      <div class="candidate-general-info">
                        <form action="#">
                          <div class="title clearfix">
                            <h6>General Information</h6>
                            <!-- <a class="pull-right" href="#"><i class="fa fa-edit"></i>Edit</a> -->
                          </div> <!-- end .end .title -->

                          <ul class="list-unstyled candidate-registration">
                            <li><strong>Tuition Name:</strong><input type="text" placeholder="[tuition name]" value="<?php echo $tuition_name; ?>"></li>
                            <li><strong>Telno:</strong><input type="text" placeholder="[telephone number]" value="<?php echo $tuition_telno; ?>"></li>
                            <li><strong>Email:</strong><input type="text" placeholder="[email]" value="<?php echo $tuition_email; ?>"></li>
                            <li><strong>Address:</strong><input type="text" placeholder="[address]" value="<?php echo $tuition_add; ?>"></li>
                            <li><strong>State:</strong><input type="text" placeholder="[state]" value="<?php echo $tuition_state; ?>"></li>
                            <li><strong>District:</strong><input type="text" placeholder="[district]" value="<?php echo $tuition_dist; ?>"></li>
                            <li><strong>Area:</strong><input type="text" placeholder="[area]" value="<?php echo $tuition_area; ?>"></li>
                          </ul>
                        </form>

                      </div> <!-- end .candidate-general-info -->
                    </div>
                    </div> <!-- end .3col grid layout -->
                    <div class="col-md-8">
                      <div class="job-reg-form">
                        <form action="controller.php" method="post" enctype="multipart/form-data">
                          
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
                                    <div class="skill-selectbox mb10">
                                      <span style="float: left">Upload Profile Picture : &nbsp &nbsp</span><input type="file" name="pro_pic" placeholder="Profile Picture" >
                                    </div> <!-- end .skill-selectbox -->
                                      <select name="tuition_state" id="tuition_state" onchange="state_change()" required>
                                        <option value="">Choose State</option>
                                        <?php
                                          foreach ($states as $s) {
                                            $ss = $s['geo_state'];
                                            echo "<option value='$ss'>$ss</option>";
                                          }
                                        ?>
                                      </select>
                                    </div> <!-- end .skill-selectbox -->
                                    <div class="skill-selectbox mb10">
                                      <select name="tuition_dist" id="tuition_dist" onchange="dist_change()" required>
                                        <option value="">-- Choose District --</option>
                                      </select>
                                    </div> <!-- end .skill-selectbox -->
                                    <div class="skill-selectbox mb10">
                                      <select name="tuition_city" id="tuition_city" required>
                                        <option value="">-- Choose Area --</option>
                                      </select>
                                    </div> <!-- end .skill-selectbox -->
                                    <!-- <div class="skill-selectbox mb10">
                                      <input type="text" name="tuition_area" placeholder="Area" class="form-control" required value="<?php echo $tuition_area; ?>"> 
                                    </div> --> <!-- end .skill-selectbox -->
                                    
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
      <!-- <script src="js/scripts.js"></script> -->


      <!-- <script type="text/javascript">
        $('#tags').tagsInput();

        bkLib.onDomLoaded(function() {
          nicEditors.editors.push(
            new nicEditor().panelInstance(
              document.getElementById('myNicEditor')
            )
          );
        });

      </script> -->

      <script type="text/javascript">
        function state_change()
        {
            var s = $('#tuition_state').val();
            var d;

            check_state = [];
            $("#tuition_dist").empty();
            $("#tuition_dist").append(new Option('-- Choose District --',''));
            $("#tuition_city").empty();
            for (i=0; i< row_geo.length; i++)
            {   
                if( row_geo[i]['geo_state'].localeCompare(s) == 0 )
                {
                    d = row_geo[i]['geo_dist'];
                    if( check_state.indexOf(d) == -1 )
                    {
                        $("#tuition_dist").append(new Option(d, d));
                        check_state.push(d);
                    }
                }
            }
        }

        function dist_change()
        {
            var d = $('#tuition_dist').val();
            var c;

            check_dist = [];
            $("#tuition_city").empty();
            $("#tuition_city").append(new Option('-- Choose Area --',''));
            for (i=0; i< row_geo.length; i++)
            {   
                if( row_geo[i]['geo_dist'].localeCompare(d) == 0 )
                {
                    c = row_geo[i]['geo_city'];
                    if( check_dist.indexOf(c) == -1 )
                    {
                        $("#tuition_city").append(new Option(c, c));
                        check_dist.push(c);
                    }

                }
            }
        }

      </script>

    </body>
  </html>

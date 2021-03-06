<?php 

 session_start(); 
 include_once("connection.php");
if ( !isset( $_SESSION['user_id'] ) ){
  header('Location: login.php');
}

 $usid = $_SESSION['user_id'];
 $tuition_id = $_SESSION['tuition_id'];
 $sql = "SELECT * FROM `tuition` WHERE `tuition_id` = '$tuition_id'";
 $sql_usr = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
 $row = mysqli_fetch_array($sql_usr);

 // $lastupdate = $row['parent_last_update'];
 $email = $row['tuition_email'];
 $telno = $row['tuition_telno'];
 $name = $row['tuition_name'];
 $address = $row['tuition_address'];
 $state = $row['tuition_state'];
 $area = $row['tuition_area'];
 $rating = $row['tuition_rating'];
 $tuition_img = $row['tuition_img'];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Profile || Tuition</title>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
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
        <div class="header-top-bar">

         <?php include 'header.php'; ?>
        </div>
        <!-- end .header-top-bar -->
      </header> <!-- end #header -->
      <div class="header-page-title job-registration clearfix">
        <div class="title-overlay"></div>
        <div class="container" style="line-height: 1.5 !important;">
          <h1>Tuition Profil</h1>

          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Tuition Profil</li>
          </ol>

        </div> <!-- end .container -->

      </div> <!-- end .header-page-title -->

      <div id="page-content" class="candidate-profile"  style="line-height: 1.5 !important;">
        <div class="container">
          <div class="page-content mt30 mb30">
            <div class="">


              <div class="tab-pane active" id="candidate-profile">
                <div class="row">
                  <div class="col-md-4">
                    <div class="motijob-sidebar">
                      <div class="candidate-profile-picture">
                        <img src="profile_pic/<?php echo $tuition_img; ?>" alt="">
                        <!-- <img src="img/content/candidate-profile.jpg" alt=""> -->
                        <!-- <div class="upload-img-field">

                        </div> -->
                        <a href="#"><?php echo $name; ?></a>
                      </div> <!-- end .agent-profile-picture -->

                      <div class="candidate-general-info">
                        <div class="title clearfix">
                            <h6>General Information</h6>
                            <a class="pull-right" href="tuition_profile-update.php"><i class="fa fa-edit"></i>Update</a>
                          </div> <!-- end .end .title -->

                        <ul class="list-unstyled">
                          <li><strong>Name:</strong><?php echo $name; ?></li>
                          <li><strong>Email:</strong><?php echo $email; ?></li>
                          <li><strong>Tel No:</strong><?php echo $telno; ?></li>
                          <li><strong>Address:</strong><?php echo $address; ?></li>
                          <li><strong>State:</strong><?php echo $state; ?></li>
                          <li><strong>Area:</strong><?php echo $area; ?></li>
                          <li><strong>Rating:</strong><?php echo $rating; ?></li>

                        </ul>

                      </div> <!-- end .candidate-general-info -->
                    </div>
                  </div> <!-- end .3col grid layout -->

                  <div class="col-md-8">
                    <div class="candidate-description">

                      <div class="candidate-details">
                        <div class="candidate-title">
                          <h5>List Of Package</h5>
                        </div>

                        <div class="form-banner-button">
                            <div class="pRemove-import pull-right">
                              <a class="btn btn-default" href='register_package.php'>Add Package</a>
                            </div> <!-- end .pRemove-import -->
                          </div> <!-- end .form-banner-button -->

                          <br><br>

                          <?php 
                          include_once("connection.php");
                           $user_id = $_SESSION['user_id'];
                           $tuition_id = $_SESSION['tuition_id'];

                          $sql = "SELECT * FROM `tuition_package` WHERE `tuition_id` = '$tuition_id'";
                          $sql_tuition = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

                            if (mysqli_num_rows($sql_tuition)==0){
                                   echo "No package found";
                             }
             
                             ?>


                                <table class="table table-bordered">
                                      <thead>
                                        <tr class="bg-primary">
                                          <th scope="col"><center>No</center></th>
                                          <th scope="col"><center>Package Name</center></th>
                                          <th scope="col"><center>Package Price</center></th>
                                          <th scope="col"><center>Package Capacity</center></th>
                                          <th scope="col"><center>Register/View Subject</center></th>
                                          <th scope="col"><center>Action</center></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php 
                                          $no = 1;
                                         while($row = mysqli_fetch_assoc($sql_tuition))
                                          { 
                                             $id = $row['package_id'];
                                             $name = $row['package_name'];
                                             $capacity = $row['package_capacity'];
                                             $price = $row['package_price'];
                                             // $desc = $row['package_description'];

                                            ?>
                                        <tr>
                                          <th scope="row"><center><?php echo $no; ?></center></th>
                                          <td><center><?php echo $name; ?></center></td>
                                          <td><center><?php echo $price; ?></center></td>
                                          <td><center><?php echo $capacity; ?></center></td>
                                          <td>
                                            <center><button class="btn btn-sm" onclick="location.href = 'add_package_subject.php?p_id=<?php echo $id; ?>';">Add Subject <i class="material-icons">playlist_add</i></button> &nbsp; 
                                            <button class="btn btn-default btn-sm glyphicon glyphicon-eye-open" onclick="location.href = 'view_package_subject.php?p_id=<?php echo $id; ?>';"> View</button> </center>
                                          </td>
                                          <td>
                                            <center><button class="btn btn-default" onclick="location.href = 'edit_package.php?p_id=<?php echo $id; ?>';">Update <i class='far fa-edit'></i></button> &nbsp; 
                                            <button class="btn btn-sm glyphicon glyphicon-trash" onclick="remove_package(<?php echo $id; ?>)"> Remove</button> </center>
                                          </td>
                                        </tr>
                                         <?php $no ++;  } ?>
                                      </tbody>
                                    </table>



                      </div> <!-- end .candidate-details -->

                    </div> <!-- end .candidate-description -->
                  </div> <!-- end .9col grid layout -->

                </div> <!-- end .row -->
              </div> <!-- end .tabe pane -->



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

      </script>

      <script type="text/javascript">
      	function remove_package(id)
      	{
      		if( confirm("Delete this package ?") )
      		{
      			window.location = "controller.php?DEL_PACKAGE="+id;
      		}
      	}
      </script>
    </body>
  </html>

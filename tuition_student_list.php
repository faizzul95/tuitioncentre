<?php session_start(); 

 $usid = $_SESSION['user_id'];
 $tuition_id = $_SESSION['tuition_id'];
 include_once("connection.php");

 if(isset($_GET['p_id']))
{
  $package_id = $_GET['p_id'];

  $sql = "SELECT * FROM `tuition_package` where `package_id` = '$package_id'";
  $sql_package = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $row = mysqli_fetch_array($sql_package);

  $package_name = $row['package_name'];
  $package_capacity = $row['package_capacity'];
  $package_price = $row['package_price'];
  $tuition_id = $row['tuition_id'];
}

if ( !isset( $_SESSION['user_id'] ) ){
  header('Location: login.php');
}

 // $sql = "SELECT * FROM `tuition` WHERE `tuition_id` = '$tuition_id'";
 // $sql_usr = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
 // $row = mysqli_fetch_array($sql_usr);

 // // $lastupdate = $row['parent_last_update'];
 // $email = $row['tuition_email'];
 // $telno = $row['tuition_telno'];
 // $name = $row['tuition_name'];
 // $address = $row['tuition_address'];
 // $state = $row['tuition_state'];
 // $area = $row['tuition_area'];
 // $rating = $row['tuition_rating'];

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          <h1>Package Student List</h1>

          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Package Student List</li>
          </ol>

        </div> <!-- end .container -->

      </div> <!-- end .header-page-title -->

      <div id="page-content" class="candidate-profile" style="line-height: 1.5 !important;">
        <div class="container">
          <div class="page-content mt30 mb30">
            <div class="">


              <div class="tab-pane active" id="candidate-profile">
                <div class="row">
        
                  <div class="col-md-12">
                    <div class="candidate-description">

                      <div class="candidate-details">
                        <div class="candidate-title">
                         Print from : <input type="date" name="dt_from" id="dt_from"> to : <input type="date" name="dt_to" id="dt_to"><br><br>
                                    Payment Status : <input type="radio" name="ss" value="all" style="margin: 5px" checked>All <input style="margin: 5px" type="radio" name="ss" value="paid">Paid 
                                                     <input type="radio" name="ss" style="margin: 5px" value="unpaid">Unpaid 
                                                    
                                    <button style="float: right" class="btn btn-sm" onclick="print_list(<?php echo $package_id; ?>)"><i class="material-icons">local_printshop</i></button>
                                    <br><span id="ss"></span>
                                    <br><br><hr>
                         
                          <h5>List Of Students</h5>
                          <h6>Package : <?php echo $package_name; ?></h6>
                        </div>

                        <div class="form-banner-button">
                            <div class="pRemove-import pull-right">
                              <!-- <a class="btn btn-default" href='register_package.php'>Add Package</a> -->
                            </div> <!-- end .pRemove-import -->
                          </div> <!-- end .form-banner-button -->

                          <br><br>

                          <?php 
                          
                            $sql = "SELECT * FROM `tuition_student_list` 
                                    inner join `student` on `student`.`student_id` = `tuition_student_list`.`student_id` 
                                    inner join `payment` on `payment`.`list_id` = `tuition_student_list`.`list_id`
                                    WHERE `package_id` = '$package_id'";
                            $sql_student = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

                            if (mysqli_num_rows($sql_student)==0){
                                   echo "No Student found";
                             }
             
                             ?>

                                <table class="table table-bordered table-responsive">
                                      <thead>
                                        <tr class="bg-primary">
                                          <th scope="col"><center>No</center></th>
                                          <th scope="col"><center>Student Name</center></th>
                                          <th scope="col"><center>Student Gender</center></th>
                                          <th scope="col"><center>Student Phone</center></th>
                                          <th scope="col"><center>Student E-mail</center></th>
                                          <th scope="col"><center>Student Start Date</center></th>
                                          <th scope="col"><center>Payment Status</center></th>
                                          <th scope="col"><center>Action</center></th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php 
                                          $no = 1;
                                         while($row = mysqli_fetch_assoc($sql_student))
                                          { 
                                            $std_name = $row['student_name'];
                                            $std_gender = $row['student_gender'];
                                            $std_telno = $row['student_telno'];
                                            $std_email = $row['student_email'];
                                            $std_start_date = $row['start_date'];
                                            $payment_status = $row['payment_status'];
                                            $payment_id = $row['payment_id'];
                                            $payment_receipt = $row['payment_receipt'];
                                            $list_id = $row['list_id'];
                                            ?>
                                        <tr>
                                          <th scope="row"><center><?php echo $no; ?></center></th>
                                          <td><center><?php echo $std_name; ?></center></td>
                                          <td><center><?php echo $std_gender; ?></center></td>
                                          <td><center><?php echo $std_telno; ?></center></td>
                                          <td><center><?php echo $std_email; ?></center></td>
                                          <td><center><?php echo $std_start_date; ?></center></td>
                                          <td>
                                            <?php
                                            if ( $payment_status == 'UNPAID')
                                            { 
                                            ?>
                                                <center><?php echo $payment_status; ?></center>
                                            <?php
                                            }
                                            elseif ( $payment_status == 'PENDING') 
                                            { ?>
                                                <center>
                                                  <button class="btn btn-default" onclick="approve_pay(<?php echo $payment_id; ?>, <?php echo $package_id; ?>)">Approve <i class="fa fa-check-square-o"></i></button> <br>&nbsp
                                                  <button class="btn btn-sm glyphicon glyphicon-eye-open" onclick="view_receipt('<?php echo $payment_receipt; ?>')"> Receipt</button>
                                                </center>
                                            <?php
                                            }
                                            else  //paid
                                            { ?>
                                                <center><?php echo $payment_status; ?></center>
                                            <?php
                                            } 
                                            ?>
                                          </td>
                                          <td>
                                            <center><button class="btn btn-sm glyphicon glyphicon-trash" onclick="remove_student(<?php echo $list_id; ?>, <?php echo $package_id; ?>)"> Remove</button> </center>
                                          </td>
                                        </tr>
                                         <?php $no++;  }  //end while ?>

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
        $('input[name=ss]').change(function(){
            var value = $( 'input[name=ss]:checked' ).val();
            $('#ss').val(value);
        });
      </script>

      <script type="text/javascript">
        function remove_student(list_id,package_id)
        {
          if( confirm("Remove this student ?") )
          {
            window.location = "controller.php?REMOVE_STD="+list_id+"&PACKAGE_ID="+package_id;
          }
        }

        function view_receipt(file_name)
        {
          var url = "receipt/";
          url = url.concat(file_name);

          window.open(url, "_blank", "resizable=yes,top=100,left=500,width=800,height=800");
        }

        function approve_pay(payment_id, package_id)
        {
          window.location = "controller.php?approve_pay="+payment_id+"&PACKAGE_ID="+package_id;
        }

        function print_list(package_id)
        {
          var url = "print_list.php?package_id=";
          var dt_from = $('#dt_from').val();
          var dt_to = $('#dt_to').val();
          var ss = $('#ss').val();

          url = url.concat(package_id);
          url = url.concat("&from=");
          url = url.concat(dt_from);
          url = url.concat("&to=");
          url = url.concat(dt_to);
          url = url.concat("&status=");
          url = url.concat(ss);

          window.open(url, "_blank", "resizable=yes,top=100,left=500,width=800,height=800");
        }
      </script>
    </body>
  </html>

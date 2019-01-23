<?php session_start(); 

 $usid = $_SESSION['user_id'];
 $tuition_id = $_SESSION['tuition_id'];
 include_once("connection.php");

 if(isset($_GET['package_id']))
{
  $package_id = $_GET['package_id'];

  $dt_from = $_GET['from'] ?: '0001-01-01';
  // $dt_from = new DateTime($dt_from);
  $dt_to = $_GET['to'] ?: '9999-12-31';
  // $dt_to = new DateTime($dt_to);
  $student_status = $_GET['status'] ?: 'all';

  $sql = "SELECT * FROM `tuition_package` where `package_id` = '$package_id'";
  $sql_package = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $row = mysqli_fetch_array($sql_package);

  $package_name = $row['package_name'];
  $package_capacity = $row['package_capacity'];
  $package_price = $row['package_price'];
  $tuition_id = $row['tuition_id'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Student List</title>

 <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.tagsinput.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">


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
                            $std_stat = "";
                            if($student_status != 'all'){
                              $std_stat = "AND `payment`.`payment_status` = '$student_status'";
                            }

                            $sql = "SELECT * FROM `tuition_student_list` 
                                    inner join `student` on `student`.`student_id` = `tuition_student_list`.`student_id` 
                                    inner join `payment` on `payment`.`list_id` = `tuition_student_list`.`list_id`
                                    WHERE `package_id` = '$package_id' AND date_format(`start_date`,'%Y-%m-%d') >= date_format('$dt_from','%Y-%m-%d') 
                                    AND date_format(`start_date`,'%Y-%m-%d') <= date_format('$dt_to','%Y-%m-%d') {$std_stat}";

                            $sql_student = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

                            if (mysqli_num_rows($sql_student)==0){
                                   echo "No Student found";
                             }
             
                             ?>

                                <table class="table table-bordered">
                                      <thead>
                                        <tr class="bg-primary">
                                          <th scope="col"><center>No</center></th>
                                          <th scope="col"><center>Student Name</center></th>
                                          <th scope="col"><center>Student Gender</center></th>
                                          <th scope="col"><center>Student Phone</center></th>
                                          <th scope="col"><center>Student E-mail</center></th>
                                          <th scope="col"><center>Student Start Date</center></th>
                                          <th scope="col"><center>Payment Status</center></th>
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
                                          <td><center><?php echo $payment_status; ?></center></td>
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
  $(document).ready( function(){
    window.print();
  });
</script>
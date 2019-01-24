<?php
   session_start(); 
   include_once("../connection.php");
   // error_reporting(0);
   $package_id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Subject</title>
</head>
<body>
  <div class="modal-body">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td colspan="2">
            <?php  
            $query = $myConnection->query("SELECT * FROM tuition_package WHERE package_id = '$package_id'") or die (mysqli_error($myConnection));
              $row = $query->fetch_assoc();
               $name = $row['package_name'];
            ?>
            <center><h3>Package : <b><font color="#0099ff"><?php echo $name; ?></font></b></h3></center>
            <br>
          </td>
        </tr>
        <tr>
          <td>Package Subject</td>
          <td> <?php
                $sql = "SELECT * FROM `tuition_package_subject` inner join `master_subject` on `master_subject`.`subject_id` = `tuition_package_subject`.`subject_id` where `package_id` = '$package_id'";

                $sql_subject = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
                if (mysqli_num_rows($sql_subject)==0){
                  echo "No Subject Registered";
                }
                $package_desc = '';
                while ($row = mysqli_fetch_array($sql_subject))
                {
                  $package_desc .= "{$row['subject_name']} : {$row['subject_day']} : {$row['subject_start_hour']} - {$row['subject_end_hour']} <br><br>";
                }
                echo $package_desc;
              ?>      
          </td>
        </tr>
                            
       </tbody>
    </table>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</body>
</html>

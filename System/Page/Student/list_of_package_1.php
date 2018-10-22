<!--Connect start here-->
<?php include("../Controller/Connect.php"); ?>
<!--Connect end here-->
<!--Database start here-->
<?php include("../Controller/Database_sql.php"); ?>
<!--Database end here-->
<?php
   error_reporting(0);
   session_start();
   
   $user_id=$_SESSION['id'];
   $username=$_SESSION['username'];
   $name=$_SESSION['name'];
   $refer_code=$_SESSION['refer_code'];
   $level=$_SESSION['level'];
    
	$sql = "SELECT * FROM user
	WHERE id = '$user_id' LIMIT 1";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
	
	$ic_no = $row['ic_no'];
    
	   
   ?>
<?php if (!isset($_SESSION['id'])) 
   {
   echo "<script type='text/javascript'>alert('Wrong Username /Password / Recaptcha Or Your ID Not Activated Yet,Please Try Again');</script>";
   echo "<script type='text/javascript'> document.location='../../../Website/index.php'; </script>";
   } 
   ?>

<!DOCTYPE HTML>
<html>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <?php include("css/button/user_wallet_button_css.php"); ?>
  
   <?php include("../Header/header.php"); ?>
   <div id="page-wrapper">
      <div class="graphs">
         <div class="col_1">
            
            <div class="bs-example4" data-example-id="contextual-table">
						<table class="table">
						  <thead>
							<tr>
							  <th>Package Name</th>
							  <th>Package Price</th>
							  <th>Package Student No</th>
							  <th>Package Max Number</th>
							  <th>Tuition Name</th>
							  
							</tr>
						  </thead>
						  <tbody>
						  <?php
							$q = "SELECT *
							FROM list_package_student
							WHERE student_ic = '$ic_no'
							And status = '1'
							order by id";
							$r = mysql_query("$q");
						
							while($record = mysql_fetch_array($r)){ 
							
							$package_refer_code = $record['package_refer_code'] ; 
							
							$sql = "SELECT * FROM tuition_package
							WHERE package_refer_code='$package_refer_code' ";
							$res = mysql_query($sql) or die(mysql_error());
							$row = mysql_fetch_assoc($res);

							$package_name = $row['package_name'];
							$package_price = $row['package_price'];
							$package_student_no = $row['package_student_no'];
							$package_max_no = $row['package_max_no'];

							?>
							<form action="" method="post" >
							<tr class="active">
							  <td><?php echo $package_name ;?></td>
							  <td><?php echo $package_price ;?></td>
							  <td><?php echo $package_student_no ;?></td>
							  <td><?php echo $package_max_no ;?></td>
							  <td><?php echo $package_max_no ;?></td>
							  
							  <td>
							  <input type='hidden' name='package_id' value='<?php echo $record['id'];?>' >
							  <input type='hidden' name='package_refer_code' value='<?php echo $record['package_refer_code'];?>' >							  
							  </td>
			   
							</tr>
							</form>
							<?php if (mysql_num_rows($r) <= 0)echo "No data.";}?>
						  </tbody>
						</table>
					   </div>
			   
			   
         </div>
         <!--body wrapper start--> 
      </div>
      <!--body wrapper end--> 
   </div>
   <!--footer section start-->
   <?php include("../Footer/footer.php"); ?>
   <!--footer section end--> 
   
   </body>
</html>


<?php

if (isset($_POST['Action_List_Of_Package'])) 
{
$package_id = $_POST['package_id'];
$package_refer_code = $_POST['package_refer_code'];
$Go_View = $_POST['Go_View'];


   if ( $Go_View == 'View Package Detail' )
   
   {  
	  echo "<script type='text/javascript'> 
	  document.location='list_of_package.php?package_id=".$package_id."'; </script>";
   }
   
   else
   if ( $Go_View == 'View List Of Student' )
   
   {  
	  echo "<script type='text/javascript'> 
	  document.location='list_of_student_1.php?package_refer_code=".$package_refer_code."'; </script>";
   }
  
   else
   if ( $Go_View == 'Delete' )
   {  
	  
	  $UpdateQuery= "UPDATE tuition_package SET  
	  status='0'
	  WHERE id='$package_id' ";               
	  mysql_query($UpdateQuery);
	  $result=mysql_query($UpdateQuery);

	  if($result)
	  {
	  echo "<script type='text/javascript'>alert('Successfully Delete Package');</script>";
	  echo "<script type='text/javascript'> document.location='list_of_package_1.php'; </script>";
	  }

	  else 
	  {
	  echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
      echo "<script type='text/javascript'> document.location='list_of_package_1.php'; </script>";
      }
	  
   }
   
   
   
   
   
   
   
}
?>

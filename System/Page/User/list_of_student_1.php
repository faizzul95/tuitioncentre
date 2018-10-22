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
							  <th>Student Name</th>
							  <th>Join Date</th> 
							  <th>Action</th>
							  <th>Submit</th>
							</tr>
						  </thead>
						  <tbody>
						  <?php
						  
							$tuition_refer_code = $_GET['tuition_refer_code'];
							
							
							$q = "SELECT *
							FROM list_package_student
							Where package_refer_code = '$tuition_refer_code' 
							And status = '1'
							order by id";
							$r = mysql_query("$q");
						
							while($record = mysql_fetch_array($r)){ 
							
							$student_ic = $record['student_ic'];
							
							$sql = "SELECT * FROM user 
							WHERE ic_no='$student_ic' ";
							$res = mysql_query($sql) or die(mysql_error());

							$row = mysql_fetch_assoc($res);
							$name = $row['name'];


							?>
							<form action="" method="post" >
							<tr class="active">
							  <td><?php echo $name ;?></td>
							  <td><?php echo $record['created_date'];?></td>
							  <td><?php echo $record['package_student_no'];?></td>
							  <td>
							    <select  name="Go_View" style="width:100%; height:30px" required >
							    <option value="Delete Student">Delete Student</option>
								</select>
						      </td>
							  <td>
							  <input type='hidden' name='package_id' value='<?php echo $record['id'];?>' >
							  
							  <input type='submit' class='initialism  btn btn-danger' style="background-color: #000099;" 
			                  name='Action_List_Of_Student'  value='Submit'>
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

if (isset($_POST['Delete Student'])) 
{
$package_id = $_POST['package_id'];
$Go_View = $_POST['Go_View'];


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

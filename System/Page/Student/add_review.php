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

   
   
    $sql = "SELECT * FROM tuition_list
	WHERE introducer_refer_code='$refer_code' LIMIT 1";
	$res = mysql_query($sql) or die(mysql_error());

	if (mysql_num_rows($res)==1) 
	{
	$row = mysql_fetch_assoc($res);
	$tuition_refer_code = $row['tuition_refer_code'];
    }

   
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
           
            <form method="post" action="../Controller/Database_sql.php" enctype="multipart/form-data">
               <div style="padding-left:10px;" class="col-md-12 span_4">
                  <div class="activity_box">
                     <h3>Package Details</h3>
                     <div class="scrollbar scrollbar1" id="style-2">
                        <div class="activity-row">
						
                           <div style=" padding-top:20px;"  class="col-xs-12 activity-desc">
                              <div class="col-sm-1"><i class="material-icons">account_circle</i></div>
                              <div class="col-sm-3">Rating:</div>
                              <div class="col-sm-8">
                                 <input type="text"  name="package_name"  required>
                              </div>
                              <br><br>
                           </div>
						 
						   
						   <div style=" padding-top:20px;"  class="col-xs-12 activity-desc">
                              <div class="col-sm-1"><i class="material-icons">settings_phone</i></div>
                              <div class="col-sm-3">Review:</div>
                              <div class="col-sm-8">
							     <textarea type="text"  name="package_detail" cols="74" rows="5"></textarea>
                              </div>
                              <br><br>
                           </div>
                           
						   
                           <input type="hidden" class="form-control" name="tuition_refer_code" value='<?php echo $tuition_refer_code; ?>' >
                           <center>
                              <button style="width:100%;" name="register_packages" class="button">Submit</button>
                           </center>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
			   </form>
			   
			   
			   
			   
            
         </div>
         <!--body wrapper start--> 
      </div>
      <!--body wrapper end--> 
   </div>
   <!--footer section start-->
   <?php include("../Footer/footer.php"); ?>
   <!--footer section end--> 
   <!-- main content end--> 
   </section>
   <!--pop up scripts start here-->
   <?php include("scripts/setting_verification_scripts.php"); ?>
   <!--pop up scripts end here-->
   <!--pop up scripts start here-->
   <?php include("scripts/setting_social_acc_scripts.php"); ?>
   <!--pop up scripts end here--> 
   <!--pop up scripts start here-->
   <?php include("scripts/setting_password_scripts.php"); ?>
   <!--pop up scripts end here--> 
   <!--scripts start here-->
   <?php include("scripts/index_scripts.php"); ?>
   <!--scripts end here-->
   </body>
</html>
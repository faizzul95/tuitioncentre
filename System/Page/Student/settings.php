<?php
   error_reporting(0);
   session_start();
   
   $user_id=$_SESSION['id'];
   $username=$_SESSION['username'];
   $name=$_SESSION['name'];
   $level=$_SESSION['level'];
   
   
   ?>
<?php if (!isset($_SESSION['id'])) 
   {
   echo "<script type='text/javascript'>alert('Wrong Username /Password / Recaptcha Or Your ID Not Activated Yet,Please Try Again');</script>";
   echo "<script type='text/javascript'> document.location='../../../Website/index.php'; </script>";
   } 
   ?>
<!--Connect start here-->
<?php include("../Controller/Connect.php"); ?>
<!--Connect end here-->
<!--Database start here-->
<?php include("../Controller/Database_sql.php"); ?>
<!--Database end here-->
<!DOCTYPE HTML>
<html>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <?php include("css/button/user_wallet_button_css.php"); ?>
  
   <?php include("../Header/header.php"); ?>
   <div id="page-wrapper">
      <div class="graphs">
         <div class="col_1">
            <?php
               $q = "SELECT *
               FROM user
               WHERE id='".$user_id."'";
               $r = mysql_query("$q");
               
               if($r)
               {
               while($record=mysql_fetch_array($r))
               {   
               
			   $refer_code = $record['refer_code'] ;
			   
               ?>   
            <form method="post" action="../Controller/Database_sql.php" enctype="multipart/form-data">
               <div style="padding-left:10px;" class="col-md-12 span_4">
                  <div class="activity_box">
                     <h3>Personal Details</h3>
                     <div class="scrollbar scrollbar1" id="style-2">
                        <div class="activity-row">
                           <div style=" padding-top:20px;"  class="col-xs-12 activity-desc">
                              <div class="col-sm-1"><i class="material-icons">account_circle</i></div>
                              <div class="col-sm-3">Name:</div>
                              <div class="col-sm-8">
                                 <input type="text"  name="name" value="<?php echo $record['name'] ?>" required>
                              </div>
                              <br><br>
                           </div>
						   <div style=" padding-top:20px;  padding-bottom:20px;"  class="col-xs-12 activity-desc">
                              <div class="col-sm-1"><i class="material-icons">verified_user</i></div>
                              <div class="col-sm-3">Username:</div>
                              <div class="col-sm-8">
                                 <input type="text"  name="username" value="<?php echo $record['username'] ?>" readonly>
                              </div>
                              <br><br>
                           </div>
						   <div style=" padding-top:20px;  padding-bottom:20px;"  class="col-xs-12 activity-desc">
                              <div class="col-sm-1"><i class="material-icons">verified_user</i></div>
                              <div class="col-sm-3">Password:</div>
                              <div class="col-sm-8">
                                 <input type="text"  name="password" value="<?php echo $record['password'] ?>" required>
                              </div>
                              <br><br>
                           </div>
						   <div style=" padding-top:20px;"  class="col-xs-12 activity-desc">
                              <div class="col-sm-1"><i class="material-icons">account_circle</i></div>
                              <div class="col-sm-3">IC No:</div>
                              <div class="col-sm-8">
                                 <input type="text" value="<?php echo $record['ic_no'] ?>" readonly>
                              </div>
                              <br><br>
                           </div>
                           <div style=" padding-top:20px;"  class="col-xs-12 activity-desc">
                              <div class="col-sm-1"><i class="material-icons">settings_phone</i></div>
                              <div class="col-sm-3">Phone Number:</div>
                              <div class="col-sm-8">
                                 <input type="text"  name="phone_number" value="<?php echo $record['phone_number'] ?>" required>
                              </div>
                              <br><br>
                           </div>
						   <div style=" padding-top:20px;"  class="col-xs-12 activity-desc">
                              <div class="col-sm-1"><i class="material-icons">settings_phone</i></div>
                              <div class="col-sm-3">Address:</div>
                              <div class="col-sm-8">
							     <textarea name="address" cols="74"rows="5" required><?php echo $record['address'] ?> </textarea>
                              </div>
                              <br><br>
                           </div>
                           
						   
                           <input type="hidden" class="form-control" name="user_id" value='<?php echo $record['id'] ?>' >
                           <center>
                              <button style="width:100%;" name="update_personal_detail_student" class="button">Update</button>
                           </center>
                           <?php
                              }
                              }
                              else
                              {
                              echo mysql_error();
                              }
                              ?>
                           <div class="clearfix"> </div>
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
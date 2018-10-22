<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" >
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <!-- Head start here -->
   <?php include("header/head.php"); ?>
   <!-- Head end here -->
   <body>
      <!-- Head start here -->
      <?php include("header/header_wrapper.php"); ?>
      <!-- Head end here -->
	  
	  <!-- database_connection start here -->
	  <?php include("header/database_connection.php"); ?>
	  <!-- database_connection end here -->
    
      <div id="homewrapper"  >
         <div id="content">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
               <tbody>
                  <tr>
                     <td valign="top" align="center" colspan="5">&nbsp;</td>
                  </tr>
                  <tr>
                     <table width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                           <tr>
                              <td width="339" colspan="5">
                                 <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
									
                                       <form action="../System/Page/Controller/Database_sql.php" method="post">
                                          <div class="form_item">
                                             <div class="limiter">
                                                <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                                                   <div class="wrap-login100">
                                                      <span class="login100-form-title p-b-34 p-t-27">
                                                      Login
                                                      </span>
													  
                                                      <div class="wrap-input100 validate-input" data-validate = "Enter Username">
                                                         <input class="input100" type="text" name="username" placeholder="Username">
                                                         <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                                      </div>
													  
                                                      <div class="wrap-input100 validate-input" data-validate="Enter password">
                                                         <input class="input100" type="password" name="password" placeholder="Password">
                                                         <span class="focus-input100" data-placeholder="&#xf191;"></span>
                                                      </div>
													  
                                                      <br>
                                                      <div class="container-login100-form-btn">
                                                         <button type="submit" name="signin" class="login100-form-btn">
                                                         Submit
                                                         </button>
                                                      </div>
													  
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </form>
									   
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </tr>
            </table>
         </div>
      </div>
      <!-- <?php include ("footer/footer.php"); ?> -->
   </body>
   <?php include ("Scripts/form_scripts.php"); ?>
</html>
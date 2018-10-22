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
                                                      Register As Tuition Centre
                                                      </span>
													  
                                                      <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                                                         <input class="input100" type="text" name="email" placeholder="Email">
                                                         <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                                      </div>
													  
                                                      <div class="wrap-input100 validate-input" data-validate="Enter password">
                                                         <input class="input100" type="password" name="password" placeholder="Password">
                                                         <span class="focus-input100" data-placeholder="&#xf191;"></span>
                                                      </div>
													  
                                                      <div class="wrap-input100 validate-input" data-validate = "Enter Name">
                                                         <input class="input100" type="text" name="name" placeholder="Name">
                                                         <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                                      </div>
													  
                                                      <div class="wrap-input100 validate-input" data-validate = "Enter Phone Number">
                                                         <input class="input100" type="text" name="phone_number" placeholder="Phone Number">
                                                         <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                                      </div>
													  
                                                      <div class="wrap-input100 validate-input" data-validate = "Tuition Centre Name">
                                                         <input class="input100" type="text" name="tuition_centre_name" placeholder="Tuition Centre Name">
                                                         <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                                      </div>
													  
                                                      <div class="" data-validate="Enter username">
                                                         <div class="form_element cf_textbox">
                                                            <select style="width:100%;" name="state" id="location" onchange="change_country(this.value)" class="frm-field required">
                                                               <option value="">Choose State</option>
                                                               <option value="JOHOR">JOHOR</option>
                                                               <option value="KEDAH">KEDAH</option>
                                                               <option value="KELANTAN">KELANTAN</option>
                                                               <option value="LABUAN">LABUAN</option>
                                                               <option value="MELAKA">MELAKA</option>
                                                               <option value="NEGERI SEMBILAN">NEGERI SEMBILAN</option>
                                                               <option value="PERAK">PERAK</option>
                                                               <option value="PAHANG">PAHANG</option>
                                                               <option value="PERLIS">PERLIS</option>
                                                               <option value="PULAU PINANG">PULAU PINANG</option>
                                                               <option value="SABAH">SABAH</option>
                                                               <option value="SARAWAK">SARAWAK</option>
                                                               <option value="SELANGOR">SELANGOR</option>
                                                               <option value="TERENGGANU">TERENGGANU</option>
                                                            </select>
                                                         </div>
                                                         <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                                      </div>
                                                      <br>
                                                      <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                                                         <input class="input100" type="text" name="area" placeholder="Area">
                                                         <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                                      </div>
                                                      <br>
                                                      <div class="container-login100-form-btn">
                                                         <button type="submit" name="register_tuition" class="login100-form-btn">
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
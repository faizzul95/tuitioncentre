<?php
    session_start();
    echo "<h3> PHP List All Session Variables</h3>";
    foreach ($_SESSION as $key=>$val)
    echo $key." = ".$val."<br/>";
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" >
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <!-- Head start here -->
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <?php include("header/head.php"); ?>
   <!-- Head end here -->
   <body>
      <!-- Head start here -->
      <?php include("header/header_wrapper.php"); ?>
      <!-- Head end here -->
	  
	  <center><div class="w3-content w3-section">
  <img class="mySlides" src="images/slider/slide1.jpg" style="width:1200px; padding-right:100px; ">
  <img class="mySlides" src="images/slider/slide2.jpg" style="width:1200px; padding-right:100px;">
  <img class="mySlides" src="images/slider/slide3.jpg" style="width:1200px; padding-right:100px;">
</div>
</center>


      <div id="homewrapper"  >
	  <div class="clearall"></div>
         
         <div id="header_image"></div>
         <div id="content">
		
            <table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
               <tbody>
                 
                  <tr>
                     <td width="445">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                           <tbody>
                              <tr>
                                 <td width="445">
                                    <br />
									
                                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                       <tbody>
                                          <tr>
                                             <td width="144" colspan="2"><span style="font-size: 14px;"><strong><span style="color: rgb(28, 80, 153);">FINSOFT CONSULTING SDN BHD<br />
                                                <img width="5" height="10" src="images/stories/GAP.png" alt="" /><br />
                                                </span></strong></span>
                                             </td>
                                          </tr>
										  
                                          <tr>
                                             <td width="144" colspan="2">We believe in &quot;challenging possibilities&quot;. Thus, we aim to aid you in achieving the full potential of your business systems. We do so by equipping ourselves with the best the industry has to offer:</td>
                                          </tr>
										  
                                          <tr>
                                             <td width="150">&nbsp;</td>
                                             <td valign="top">&nbsp;</td>
                                          </tr>
										  
                                          <tr>
                                             <td width="200"><a href="indexd1de.html?option=com_content&amp;view=article&amp;id=75&amp;Itemid=75"><img width="121" height="121" src="images/stories/home_epicorlogo.jpg" alt="" /></a><br />
                                                &nbsp;
                                             </td>
                                             <td width="350" valign="middle">
                                                <table width="294" height="31" cellspacing="0" cellpadding="0" border="0">
                                                   <tbody>
                                                      <tr>
                                                         <td width="20">&nbsp;</td>
                                                         <td width="300"><span style="font-size: 12px;"><span style="color: rgb(28, 80, 153);"><strong>Centralise Your Business Processes With EPICOR</strong></span></span><br />
                                                            <img width="5" height="10" alt="" src="images/stories/GAP.png" /><br />
                                                            A global leader in business software solutions for manufacturing, distribution, retail and services organizations.
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
										  
                                          <tr>
                                             <td width="150"><a href="index9093.html?option=com_content&amp;view=article&amp;id=76&amp;Itemid=76"><img width="119" height="119" src="images/stories/home_kofaxlogo.jpg" alt="" /></a></td>
                                             <td valign="middle" align="center">
                                                <table width="332" height="74" cellspacing="0" cellpadding="0" border="0">
                                                   <tbody>
                                                      <tr>
                                                         <td width="20">&nbsp;</td>
                                                         <td width="315"><span style="font-size: 12px;"><span style="color: rgb(28, 80, 153);"><strong>Manage Your Information With KOFAX</strong></span></span><br />
                                                            <img width="5" height="10" alt="" src="images/stories/GAP.png" /><br />
                                                            A leading provider of a smart information-capture application for document and content management systems.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </td>
                                          </tr>
										  
                                       </tbody>
                                    </table>
									
                                 </td>
                                 <td width="339" colspan="5">
                                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                       <tbody>
                                          <form method="post" action="list_of_tuition_center.php" enctype="multipart/form-data">
                                             <div class="form_item">
                                                <div class="limiter">
                                                   <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                                                      <div class="wrap-login100">
                                                         <span class="login100-form-title p-b-34 p-t-27">
                                                         Search Available Tuition Centre
                                                         </span>
														 
                                                         <div class="" data-validate="Enter username">
                                                            <div class="form_element cf_textbox">
                                                               <br>
                                                               <select style="width:100%;" name="area"  class="frm-field" required>
                                                                  <option value="">Choose Location In Shah Alam</option>
                                                                  <option value="Seksyen 7">Seksyen 7</option>
                                                                  <option value="Sekyesn 13">Sekyesn 13</option>
                                                                  <option value="Seksyen 9">Seksyen 9</option>
                                                               </select>
                                                            </div>
                                                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                                         </div>
														 
                                                         <div class="" data-validate="Enter username">
                                                            <div class="form_element cf_textbox">
                                                               <br>
                                                               <select style="width:100%;" name="avg_rating"  class="frm-field" required>
                                                                  <option value="">Choose Rating</option>
																  <option value="0">No Star Yet</option>
                                                                  <option value="1">1 Star</option>
                                                                  <option value="2">2 Star</option>
                                                                  <option value="3">3 Star</option>
                                                                  <option value="4">4 Star</option>
                                                                  <option value="5">5 Star</option>
                                                               </select>
                                                            </div>
                                                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                                         </div>
														 
                                                         <div class="" data-validate="Enter username">
                                                            <div class="form_element cf_textbox">
                                                               <br>
                                                               <select style="width:100%;" name="available_subjects"  class="frm-field" required>
                                                                  <option value="">Choose Subject</option>
                                                                  <option value="Bahasa Melayu">Bahasa Melayu</option>
                                                                  <option value="Bahasa Inggeris">Bahasa Inggeris</option>
                                                                  <option value="Sains">Sains </option>
                                                                  <option value="Matematik">Matematik</option>
                                                                  <option value="Sejarah">Sejarah </option>
                                                                  <option value="Geografi">Geografi </option>
                                                                  <option value="Pendidikan Islam">Pendidikan Islam </option>
                                                                  <option value="Kemahiran Hidup">Kemahiran Hidup</option>
                                                               </select>
                                                            </div>
                                                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                                         </div>
														 
                                                         <br>
                                                         <div class="container-login100-form-btn">
															<button style="width:100%;" name="view_tuition_center" class="login100-form-btn">Submit</button>
                                                         </div>
                                          </form>
                                          </div>
                                          </div>
                                          </div>
                                          </div>
                                       </tbody>
                                    </table>
                              </tr>
                           </tbody>
                        </table>
                     </td>
					 
					 
                  </tr>
            </table>
		
         </div>
      </div>
      <!-- <?php include ("footer/footer.php"); ?> -->
   </body>
   
   <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>


   <?php include ("Scripts/form_scripts.php"); ?>
</html>
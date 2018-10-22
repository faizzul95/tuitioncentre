<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" >
   <!-- Mirrored from finsoftconsulting.com.my/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jul 2018 05:46:18 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <!-- /Added by HTTrack -->
   <!-- Head start here -->
   <?php include("header/head.php"); ?>
   <!-- Head end here -->
   <body>
      <!-- Head start here -->
      <?php include("header/header_wrapper.php"); ?>
      <!-- Head end here -->
      <div id="homewrapper"  >
         <div id="content">
            <br>
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
               <tbody>
                  <tr style="outline: #002080 solid 2px; " >    
                     <td style="padding-left:20px;" width="300">
                        
						<?php 
						$tuition_refer_code= $_GET['tuition_refer_code'] ;
						
						$q = "SELECT * 
						From tuition_package 
						where tuition_refer_code='$tuition_refer_code'
						And status ='1' ";
						$r = mysql_query("$q");
						if($r)
						{
						while($row=mysql_fetch_array($r))
						{ ?>
						<?php do { ;?>

                        <br>
                        <b><?php echo $row['package_name'] ?></b><br><br>
                        <b>Detail : </b> <?php echo $row['package_detail'] ?><br><br>
                        <b>Price :</b> <?php echo $row['package_price'] ?><br><br>
						<b>Student :</b> <?php echo $row['package_student_no'] ?> / <?php echo $row['package_max_no'] ?><br><br>
						
						<form method="post" action="../System/Page/Controller/Database_sql.php" enctype="multipart/form-data">
						
						<?php if (isset($_SESSION['id'])) 
                        {
                        ?>
						<input type="hidden"  name="ic_no" value='<?php echo $ic_no; ?>' >
						<input type="hidden"  name="package_refer_code" value='<?php echo $row['package_refer_code'] ?>' >
                        <button style="background-color:#9152f8;" name="apply_package" class="btn">Apply</button>
						<?php 
                        }
						else
						{
                        ?>
						<button style="background-color:#9152f8;" type="button" class="btn" disable>Apply</button>
						Please Register And Login First Before Apply
						<?php 
                        }
						?>
						</form>
                        <hr>
						
						<?php }while($row=mysql_fetch_array($r));}} ?>				
                     </td>
                  </tr>
                  
				  
				  
               </tbody>
            </table>
         </div>
      </div>

      <div id="homewrapper"  >
         <div id="content">
            <br>
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
               <tbody>
                  <tr style="outline: #002080 solid 2px; " >    
                     <td style="padding-left:20px;" width="300">
                        <?php include 'review/index.php'; ?>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
      
   </body>
   <!-- Mirrored from finsoftconsulting.com.my/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jul 2018 05:46:43 GMT -->
</html>
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
			   
			   <?php 
			        if(isset($_POST['view_tuition_center'])){
						
			        $area = $_POST['area'] ;
					$avg_rating = $_POST['avg_rating'] ;
					$available_subjects = $_POST['available_subjects'] ;
					}
					
					$q = "SELECT * 
					From tuition_list 
					where area = '$area' 
					and avg_rating = '$avg_rating' 
					and available_subjects LIKE '%{$available_subjects}%'
					and status='1'
					";
					$r = mysql_query("$q");
					if (mysql_num_rows($r)==0) 
                    {
					 echo "<script type='text/javascript'>alert('Sorry , There is no available tuition centre based on your criteria.Please try again');</script>";
                     echo "<script type='text/javascript'> document.location='index.php'; </script>";
					}
					else
					{
					if($r)
					{
					while($row=mysql_fetch_array($r))
					{ 
				    $tuition_refer_code = $row['tuition_refer_code']; ?>
					<?php do { ;?>
                  <tr style="outline: #002080 solid 2px; " >
                     <td style="padding-top:20px; padding-bottom:20px; padding-left:20px;" width="100"><img width="121" height="121" src="images/stories/home_epicorlogo.jpg" alt="" /></td>
                     <td width="300"><span style="font-size: 19px;"><span style="color: rgb(28, 80, 153);"><strong><br /><?php echo $row['tuition_centre_name'] ?><?php echo $row['tuition_centre_name'] ?></strong></span></span><br />
                        <img width="5" height="10" alt="" src="images/stories/GAP.png" /><br />
                        <b>Address :</b> <?php echo $row['address'] ?><br>
						<b>Phone No :</b> <?php echo $row['tuition_phone'] ?><br><br>                        
						<button style="background-color:#9152f8;" type="button" onclick="window.location='package_detail.php?tuition_refer_code=<?php echo $tuition_refer_code; ?> ';" class="btn">View</button>
                        <br><br>						
                     </td>
                  </tr>
				  
					<?php }while($row=mysql_fetch_array($r));}} } ?>

               </tbody>
            </table>
         </div>
      </div>
      
   </body>
  
</html>
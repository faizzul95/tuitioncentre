<?php include_once("top_header.php"); ?>

<!DOCTYPE HTML>
<html>
<?php include_once("../Header/header.php"); ?>
  <?php include_once("css/button/user_wallet_button_css.php"); ?>
  
  
<?php 

if(isset($_POST['cust_status']))
{
$cust_status = $_POST['cust_status']; 
}
else

if(isset($_GET['cust_status']))
{
$cust_status = $_GET['cust_status'];
}

?>
  
  
  <div id="page-wrapper">
    <div class="graphs">
      <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
          <h2>List Of All Order</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"> 
          <span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        
        <div class="panel-body no-padding" style="display: block;">
               
                <input type="text" style="width:100%;" id="myInputSearch" onkeyup="myFunctionSearch()" placeholder="Search for names.." title="Type in a name">
          <table  id="myTableSearch" class="table table-striped">
            <thead>
              <tr class="warning">
                 <th>ID</th>
                 <th>Date Of Job</th>
                 <th>Type Of Job</th>
                 <th>From</th>
                 <th>To</th>
				 <th>Milleage</th>
				 <th>Charge</th>
				 <th>Man Power</th>
			     <th>Comp Job</th>
                 <th>Action</th>
                 <th>Submit</th>
                 
              </tr>
            </thead>
            
            <tbody>
             
            <form action='' method='post'>
              <tr>
               
                          <td>1001</td>
                          <td>13-07-2018</td>
                          <td>Shipping</td>
                          <td>Kuantan, Pahang</td> 
						  <td>Seri Kembangan, Selangor</td> 
						  <td>327 KM</td> 
						  <td>RM 1300</td> 
						  <td>4</td>
						  <td>MEDS SDN BHD</td>
						  <td><select  name="Go_View" style="width:100%; height:30px" required >
                              <option value="View Customer Details">View Order Details</option>
                            </select>
                          </td>    
                                          
                          <td><input type='submit' class='initialism fadeandscale3_open btn btn-danger' style="background-color: #000099;" 
						   name='search_customer'  value='Submit'>
                          </td>
                          <input type="hidden" name="id" value="<?php echo $id ;?>" />
                          <input type="hidden" name="user_id" value="<?php echo $user_id ;?>" />
                          <input type="hidden" name="status" value="<?php echo $status ;?>" />
                          <input type="hidden" name="status_page" value="<?php echo $status ;?>" />
              </tr>
			  
			  
			  
			  <tr>
               
                          <td>1002</td>
                          <td>15-07-2018</td>
                          <td>Disposal</td>
                          <td>Uitm Shah Alam , Selangor</td> 
						  <td>Seri Kembangan, Selangor</td> 
						  <td>34 KM</td> 
						  <td>RM 200</td> 
						  <td>2</td>
						  <td>MEDS SDN BHD</td>
						  <td><select  name="Go_View" style="width:100%; height:30px" required >
                              <option value="View Customer Details">View Order Details</option>
                            </select>
                          </td>    
                                          
                          <td><input type='submit' class='initialism fadeandscale3_open btn btn-danger' style="background-color: #000099;" 
						   name='search_customer'  value='Submit'>
                          </td>
                          <input type="hidden" name="id" value="<?php echo $id ;?>" />
                          <input type="hidden" name="user_id" value="<?php echo $user_id ;?>" />
                          <input type="hidden" name="status" value="<?php echo $status ;?>" />
                          <input type="hidden" name="status_page" value="<?php echo $status ;?>" />
              </tr>
              </form>
                      
              
            </tbody>
            
          </table>
          
          
        </div>
      </div>
    </div>
    <!--body wrapper end--> 
  </div>
  
 
  
  <?php

if (isset($_POST['search_customer'])) 
{
		  
   $id = $_POST['id'];
   $Go_View = $_POST['Go_View'];
   $status = $_POST['status'];
   $from_page = 'view_customer.php';


   if ( $Go_View == 'View Customer Details' )
   {  
	  echo "<script type='text/javascript'>document.location='../Admin_xx/view_customer_detail.php?id=".$id."&from_page=".$from_page."&status=".$status."'; </script>";
   }
   
   else
   if ( $Go_View == 'Block Customer' )
   {  
      
	  require_once("../Controller/Database_sqlxx_ad_xx.php"); block_customer();	   
	  
   }
   
   else
   if ( $Go_View == 'Unblock Customer' )
   {  
	  require_once("../Controller/Database_sqlxx_ad_xx.php");  unblock_customer();	  
   }
   
   else
   if ( $Go_View == 'Delete Customer' )
   {  
	  require_once("../Controller/Database_sqlxx_ad_xx.php");  delete_customer();
   }
   
   else
   if ( $Go_View == 'Undelete Customer' )
   {  
	  require_once("../Controller/Database_sqlxx_ad_xx.php");  undelete_customer();
   }
   

       
}
?>




  <!--footer section start-->
  <?php include_once("../Footer/footer.php"); ?>
  <!--footer section end--> 
  
  <!-- main content end--> 
</section>

<!--scripts start here-->
<?php include_once("scripts/index_scripts.php"); ?>
<!--scripts end here-->

</body>
</html>
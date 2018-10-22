<?php include_once("top_header.php"); ?>

<!DOCTYPE HTML>
<html>
<?php include_once("../Header/header.php"); ?>
  <?php include_once("css/button/user_wallet_button_css.php"); ?>
  <?php 

if(isset($_POST['view_btc_list']))
{
$type_business_1 = $_POST['type_business'];
$transaction_status_1 = $_POST['transaction_status'];
$type_of_coin = $_POST['type_of_coin'];


  if  ( $type_business_1 == '1' )
  {
	$type_business = "Sell" ;
  }  
   else if  ( $type_business_1 == '2' )
  {
	$type_business = "Buy" ;
  }



  if  ( $transaction_status_1 == '1' )
  {
	$transaction_status = "Pending" ;
  }
   else if  ( $transaction_status_1 == '4' )
  {
	$transaction_status = "Approved" ;
  }
  
  
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
          <h2>List Of <?php echo $type_of_coin; ?> <?php echo $type_business; ?> Status </h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}">
           <span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
          <?php
				$q = "SELECT *
				FROM sell_buy
				Where type_of_business = '$type_business_1'
				And transaction_status = '$transaction_status_1' 
				And type_of_coin = '$type_of_coin'
				order by id";
				$r = mysql_query("$q");
				?>
          <input type="text" style="width:100%;" id="myInputSearch" onkeyup="myFunctionSearch()" placeholder="Search for names.." title="Type in a name">
          <table  id="myTableSearch" class="table table-striped">
            <thead>
              <tr class="warning">
                <th>ID</th>
                <th>Email</th>
                <th>Name</th>
                <th>RM</th>
                <th>BTC</th>
                <th>Status</th>
                <th>Action</th>
                <th>Submit</th>
              </tr>
            </thead>
            <tbody>
              <?php while($record = mysql_fetch_array($r)){ 
		
		     		$id = $record['id'] ; 
		      		$email = $record['email'] ; 
			  		$password = $record['password'] ; 
			  		$fullname = $record['fullname'] ; 
			  		$phone_number = $record['phone_number'] ; 
			  		$created_date = $record['created_date'] ; 
			  		$status = $record['status'] ;
					
					if  ( $status == '4' ) { $cust_status = 'Active';}
					else
					if  ( $status == '8' ) { $cust_status = 'Blocked';}
					else
					if  ( $status == '9' ) { $cust_status = 'Deleted';}
					
			?>
            <form action='' method='post'>
              <tr>
                <td><?php echo $id ; ?></td>
                <td><?php echo $email ; ?></td>
                <td><?php echo $fullname ; ?></td>
                <td><?php echo $phone_number ; ?></td>
                <td><?php echo $created_date ; ?></td>
                <td><?php echo $cust_status ; ?></td>
                <td><select  name="Go_View" style="width:100%; height:30px" required >
                    <option value="View Customer Details">View Customer Details</option>
                    <option value="Block Customer">Approve</option>
                    <option value="Unblock Customer">Unblock Customer</option>
                    
                  </select></td>
                <td><input type='submit' class='initialism fadeandscale3_open btn btn-danger' style="background-color: #000099;" 
						   name='search_customer'  value='Submit'></td>
                <input type="hidden" name="id" value="<?php echo $id ;?>" />
                <input type="hidden" name="user_id" value="<?php echo $user_id ;?>" />
                <input type="hidden" name="status" value="<?php echo $status ;?>" />
                <input type="hidden" name="status_page" value="<?php echo $status ;?>" />
              </tr>
            </form>
            <?php if (mysql_num_rows($r) <= 0)echo "Tiada dalam rekod.";}?>
              </tbody>
            
          </table>
          
          <a href="btc_1.php" class="btn btn-primary pull-right">BACK</a>
          
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
	  echo "<script type='text/javascript'>document.location='../Admin_xx/view_customer_detail.php?id=".$id."&from_page=".$from_page."&status=".$status."';       </script>";
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
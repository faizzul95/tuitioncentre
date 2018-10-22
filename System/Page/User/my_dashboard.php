<?php include_once("top_header.php"); ?>

<!DOCTYPE HTML>
<html>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<?php include_once("css/button/user_wallet_button_css.php"); ?>

<!-- The Pop Up Style-->
<?php include_once("css/pop_up/popup_css_setting.php"); ?>
<!-- The Pop Up Style-->

<!-- The Pop Up -->
<?php include_once("pop_up/rem_buy_ads.php"); ?>
<!-- The Pop Up -->

<!-- The Pop Up -->
<?php include_once("pop_up/rem_sell_ads.php"); ?>
<!-- The Pop Up -->

<?php
$type_of_coin = $_GET['type_of_coin'];

      if ( $type_of_coin == 'btc' )
		  
	  {
		  
		$images_name =  'bitcoin_round.jpg'; 
		$width	= '50px'; 	
	  }
      
	  else  
	  if ( $type_of_coin == 'eth' )
	  {
		  
		$images_name =  'ethereum.png';  
		$width	= '50px'; 	
	  }
	  
	  
      else  
	  if ( $type_of_coin == 'rdd' )
	  {
		  
		$images_name =  'reddcoin.jpg';
        $width	= '100px'; 	
	  }
	  
	  
      else  
	  if ( $type_of_coin == 'pnd' )
	  {
		  
		$images_name =  'panda_coin.jpg'; 
		$width	= '50px'; 	
	  }
?>
<?php include_once("../Header/header.php"); ?>
  <div id="page-wrapper">
    <div class="graphs">
      <div class="col_1">
        <div style="padding-left:10px;" class="col-md-12 span_4">
          <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
			
            <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <div class="tab">
                <button class="btn btn-primary" onClick="openCity(event, 'YourOpeningTrade')" id="defaultOpen">Your Opening Trade</button>
                <button class="btn btn-primary" onClick="openCity(event, 'YourClosedTrade')" id="defaultOpen">Your Closed Trade</button>
                <button class="btn btn-primary" onClick="openCity(event, 'YourAdvertisements')" id="defaultOpen">Your Advertisements</button>
                <button class="btn btn-primary" onClick="openCity(event, 'RefferalsList')" id="defaultOpen">Refferals List</button>
                </div>
                <span class="icon-bar"></span> 
				<span class="icon-bar"></span> <span class="icon-bar"></span>
              </button>
            </div>
            </div>
		  
          </nav>
          <div class="content">
            <div class="container-fluid">
			
			 
			  <?php /*?>
              <div id="YourOpeningTrade" class="tabcontent"> <span onClick="this.parentElement.style.display='none'" class="topright">x</span>
                <div style="padding-left:10px;" class="col-md-12 span_4">
                  <div class="activity_box">
                    <h3>Personal Details</h3>
                    <div class="scrollbar scrollbar1" id="style-2">
                      <div class="activity-row">
                        <div style=" padding-top:20px;"  class="col-xs-12 activity-desc">
                          <div class="col-sm-1"><i class="material-icons">account_circle</i></div>
                          <div class="col-sm-3">Name:</div>
                          <div class="col-sm-8">
                            <input type="text" class="form-control1" id="mediuminput" name="fullname" value="<?php echo $record['fullname'] ?>" required>
                          </div>
                          <br>
                          <br>
                        </div>
                        <div style=" padding-top:20px;"  class="col-xs-12 activity-desc">
                          <div class="col-sm-1"><i class="material-icons">email</i></div>
                          <div class="col-sm-3">Email:</div>
                          <div class="col-sm-8">
                            <input type="text" class="form-control1" id="mediuminput" value="<?php echo $record['email'] ?>" readonly>
                          </div>
                          <br>
                          <br>
                        </div>
                        <div style=" padding-top:20px;"  class="col-xs-12 activity-desc">
                          <div class="col-sm-1"><i class="material-icons">settings_phone</i></div>
                          <div class="col-sm-3">Phone Number:</div>
                          <div class="col-sm-8">
                            <input type="text" class="form-control1" id="mediuminput" name="phone_number" value="<?php echo $record['phone_number'] ?>" >
                          </div>
                          <br>
                          <br>
                        </div>
                        <div style=" padding-top:20px;"  class="col-xs-12 activity-desc">
                          <div class="col-sm-1"><i class="material-icons">edit_location</i></div>
                          <div class="col-sm-3">Country:</div>
                          <div class="col-sm-8">
                            <select style="width:70%;" name="country" id="selector1" class="form-control1">
                              <option value="<?php echo $record['country'] ?>"><?php echo $record['country'] ?></option>
                              <?php include_once("country.php"); ?>
                            </select>
                          </div>
                          <br>
                          <br>
                          <br>
                        </div>
                        <input type="hidden" class="form-control" name="user_id" value='<?php echo $record['id'] ?>' >
                        <center>
                          <button style="width:100%;" name="update_personal_detail" class="button">Update</button>
                        </center>
                        <div class="clearfix"> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  <?php */?>
			  
			  
			  
			  
			  <div id="YourOpeningTrade" class="tabcontent"> <span onClick="this.parentElement.style.display='none'" class="topright">x</span>
                <div style="padding-left:10px;" class="col-md-12 span_4">
                  <div class="activity_box">
                    <h3>My Open Trade</h3>
                    <div class="scrollbar scrollbar1" id="style-2">
                      <?php
				    $q = "SELECT *
				    FROM coin_transaction
				
				    order by id";
				    $r = mysql_query("$q");
				
				    while($record = mysql_fetch_array($r)){ 
		
		     		$id = $record['id'] ; 
		      		$transaction_reference = $record['transaction_reference'] ; 
			  		$created_date = $record['created_date'] ; 
			  		$coin_amount = $record['coin_amount'] ; 
			  		$transaction_type = $record['transaction_type'] ; 
					$coin_type1 = $record['coin_type'] ; 
			  		$created_date = $record['created_date'] ; 
			  		$status1 = $record['status'] ;
					
					     if ( $status1 == "0" )  {$status = "Pending"; }
					else if ( $status1 == "4" )  {$status = "Approve"; }
					else if ( $status1 == "8" )  {$status = "Rejected";}
					else if ( $status1 == "9" )  {$status = "Deleted"; }
					
					
					     if ( $coin_type1 == "1" )  {$coin_type = "BTC"; }
					else if ( $coin_type1 == "2" )  {$coin_type = "ETH"; }
					else if ( $coin_type1 == "3" )  {$coin_type = "RDD";}
					else if ( $coin_type1 == "4" )  {$coin_type = "PND"; }
					
					if ( $transaction_type == "1" ) /* Sell */
					{
						$symbol = "-";
						$font_color = "#ff1a1a";
					}
					else if ( $transaction_type == "2" ) /* Buy */
					{
						$symbol = "+";
						$font_color = "#33ff33";
					}
					
					
			         ?>
                      <div id="myBtn"  class="activity-row">
                        <div class="col-xs-1 activity-img"><img style="width:50px; height:50px;" src="images/bitcoin_round.jpg" class="img-responsive" alt="">
                        </div>
						<div class="col-xs-2 activity-desc">
                          <h5><a href="#">No ID</a></h5>
                          <p>Tarikh</p>
						  <p>Status</p>
                        </div>
                        <div class="col-xs-7 activity-desc">
                          <h5><a href="#">0.002324344 BTC via bank transfer from Toxiev2</a></h5>
                          <p>Trade Value : RM 1,222.00 MYR</p>
						  
                        </div>
                        <div class="col-xs-2 activity-desc1">
                          <h6> Type Of Trade : <font color="" >Sell</font></h6>
                        </div>
                        <div class="clearfix"> </div>
                      </div>
                      <?php if (mysql_num_rows($r) <= 0)echo "No data.";}?>
                    </div>
                  </div>
                </div>
              </div>
			  
			  
			  
			  
              <div id="YourClosedTrade" class="tabcontent"> <span onClick="this.parentElement.style.display='none'" class="topright">x</span>
                <div style="padding-left:10px;" class="col-md-12 span_4">
                  <div class="activity_box">
                    <h3>My Closed Trade</h3>
                    <div class="scrollbar scrollbar1" id="style-2">
                      <?php
				    $q = "SELECT *
				    FROM coin_transaction
				
				    order by id";
				    $r = mysql_query("$q");
				
				    while($record = mysql_fetch_array($r)){ 
		
		     		$id = $record['id'] ; 
		      		$transaction_reference = $record['transaction_reference'] ; 
			  		$created_date = $record['created_date'] ; 
			  		$coin_amount = $record['coin_amount'] ; 
			  		$transaction_type = $record['transaction_type'] ; 
					$coin_type1 = $record['coin_type'] ; 
			  		$created_date = $record['created_date'] ; 
			  		$status1 = $record['status'] ;
					
					     if ( $status1 == "0" )  {$status = "Pending"; }
					else if ( $status1 == "4" )  {$status = "Approve"; }
					else if ( $status1 == "8" )  {$status = "Rejected";}
					else if ( $status1 == "9" )  {$status = "Deleted"; }
					
					
					     if ( $coin_type1 == "1" )  {$coin_type = "BTC"; }
					else if ( $coin_type1 == "2" )  {$coin_type = "ETH"; }
					else if ( $coin_type1 == "3" )  {$coin_type = "RDD";}
					else if ( $coin_type1 == "4" )  {$coin_type = "PND"; }
					
					if ( $transaction_type == "1" ) /* Sell */
					{
						$symbol = "-";
						$font_color = "#ff1a1a";
					}
					else if ( $transaction_type == "2" ) /* Buy */
					{
						$symbol = "+";
						$font_color = "#33ff33";
					}
					
					
			         ?>
                      <div id="myBtn"  class="activity-row">
                        <div class="col-xs-1 activity-img"><img style="width:50px; height:50px;" src="images/bitcoin_round.jpg" class="img-responsive" alt="">
                        </div>
						<div class="col-xs-2 activity-desc">
                          <h5><a href="#">No ID</a></h5>
                          <p>Tarikh</p>
						  <p>Status</p>
                        </div>
                        <div class="col-xs-7 activity-desc">
                          <h5><a href="#">0.002324344 BTC via bank transfer from Toxiev2</a></h5>
                          <p>Trade Value : RM 1,222.00 MYR</p>
						  
                        </div>
                        <div class="col-xs-2 activity-desc1">
                          <h6> Type Of Trade : <font color="" >Sell</font></h6>
                        </div>
                        <div class="clearfix"> </div>
                      </div>
                      <?php if (mysql_num_rows($r) <= 0)echo "No data.";}?>
                    </div>
                  </div>
                </div>
              </div>
			  
			  
			  
			  
			  
			  
			  
			  <div id="YourAdvertisements" class="tabcontent"> <span onClick="this.parentElement.style.display='none'" class="topright">x</span>
                <div id="page-wrapper">
                <div class="graphs">
                <div class="col_1">
      
                
                <div style="padding-left:10px;" class="col-md-6 span_4">
                <div class="activity_box">
                    <h3>My BTC Buying Ads</h3>
					<center>
                    <button style="width:98%;" id="RemBuyAdsModalButton" class="button">Create Buying Advertisements</button>
                    </center>
                    <div class="scrollbar scrollbar1" id="style-2">
					<form method="post" action="../Controller/Database_sql.php" enctype="multipart/form-data">
                     <?php
				    $q = "SELECT *
				    FROM rem_sell_buy
				    Where 	buyer_id = '$user_id' 
				    order by id";
				    $r = mysql_query("$q");
				
				    while($record = mysql_fetch_array($r)){ 
		
		     		$id = $record['id'] ;
                    $buyer_id = $record['buyer_id'] ;
					$maximum_coin_amount = $record['maximum_coin_amount'] ;
					
					$sql2 = "SELECT fullname FROM users WHERE id= '$buyer_id'";
					$result = mysql_query($sql2) or die('Query failed. ' . mysql_error());
					$row = mysql_fetch_array($result, MYSQL_ASSOC);
					$buyer_name = $row['fullname'];
					
		      		$payment_method1 = $record['payment_method'] ;


					     if ( $payment_method1 == "1" )  {$payment_method = "Bank Transfer"; }
					else if ( $payment_method1 == "2" )  {$payment_method = "Not Bank Transfer"; }
					
					
					$coin_type1 = $record['type_of_coin'] ; 
					
					     if ( $coin_type1 == "1" )  {$coin_type = "BTC"; }
					else if ( $coin_type1 == "2" )  {$coin_type = "ETH"; }
					else if ( $coin_type1 == "3" )  {$coin_type = "RDD";}
					else if ( $coin_type1 == "4" )  {$coin_type = "PND"; }
					
					if ( $transaction_type == "1" ) /* Sell */
					{
						$symbol = "-";
						$font_color = "#ff1a1a";
					}
					else if ( $transaction_type == "2" ) /* Buy */
					{
						$symbol = "+";
						$font_color = "#33ff33";
					}
					
					
			         ?>
                      <div id="myBtn"  class="activity-row">
                        <div class="col-xs-3 activity-img"><img style="width:50px; height:50px;" src="images/bitcoin_round.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-xs-9 activity-desc">
                          <h5><a href="#">0.002324344 BTC via <?php echo $payment_method; ?> from <?php echo $buyer_name; ?></a></h5>
                          <p>Maximum : <?php echo $maximum_coin_amount; ?> <?php echo $coin_type ; ?> </p>
						  
                        </div>
                        
                        <div class="clearfix"> </div>
                      </div>
                      <?php if (mysql_num_rows($r) <= 0)echo "No data.";}?>
                    </div>
                  </div>
        </div>
        </form>
        
        
        <div style="padding-left:10px;" class="col-md-6 span_4">
          <div class="activity_box">
                    <h3>My BTC Selling Ads </h3> 
					<center>
                    <button style="width:98%;" id="RemSellAdsModalButton" name="update_personal_detail" class="button">Create Selling Advertisements</button>
                    </center>
                    <div class="scrollbar scrollbar1" id="style-2">
					<form method="post" action="../Controller/Database_sql.php" enctype="multipart/form-data">
                     <?php
				    $q = "SELECT *
				    FROM rem_sell_buy
				    Where 	seller_id = '$user_id' 
				    order by id";
				    $r = mysql_query("$q");
				
				    while($record = mysql_fetch_array($r)){ 
		
		     		$id = $record['id'] ;
                    $buyer_id = $record['buyer_id'] ;
					$maximum_coin_amount = $record['maximum_coin_amount'] ;
					
					$sql2 = "SELECT fullname FROM users WHERE id= '$buyer_id'";
					$result = mysql_query($sql2) or die('Query failed. ' . mysql_error());
					$row = mysql_fetch_array($result, MYSQL_ASSOC);
					$buyer_name = $row['fullname'];
					
		      		$payment_method1 = $record['payment_method'] ;


					     if ( $payment_method1 == "1" )  {$payment_method = "Bank Transfer"; }
					else if ( $payment_method1 == "2" )  {$payment_method = "Not Bank Transfer"; }
					
					
					$coin_type1 = $record['type_of_coin'] ; 
					
					     if ( $coin_type1 == "1" )  {$coin_type = "BTC"; }
					else if ( $coin_type1 == "2" )  {$coin_type = "ETH"; }
					else if ( $coin_type1 == "3" )  {$coin_type = "RDD";}
					else if ( $coin_type1 == "4" )  {$coin_type = "PND"; }
					
					if ( $transaction_type == "1" ) /* Sell */
					{
						$symbol = "-";
						$font_color = "#ff1a1a";
					}
					else if ( $transaction_type == "2" ) /* Buy */
					{
						$symbol = "+";
						$font_color = "#33ff33";
					}
					
					
			         ?>
                      <div id="myBtn"  class="activity-row">
                        <div class="col-xs-3 activity-img"><img style="width:50px; height:50px;" src="images/bitcoin_round.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-xs-9 activity-desc">
                          <h5><a href="#">0.002324344 BTC via <?php echo $payment_method; ?> from <?php echo $buyer_name; ?></a></h5>
                          <p>Maximum : <?php echo $maximum_coin_amount; ?> <?php echo $coin_type ; ?> </p>
						  
                        </div>
                        
                        <div class="clearfix"> </div>
                      </div>
                      <?php if (mysql_num_rows($r) <= 0)echo "No data.";}?>
                    </div>
                  </div>
        </div>
        
      </div>
      <!--body wrapper start--> 
    </div>
    <!--body wrapper end--> 
  </div>
              </div>
			  
			  
			  
			  
			  
			  
			  
			  
			  <div id="RefferalsList" class="tabcontent"> <span onClick="this.parentElement.style.display='none'" class="topright">x</span>
                <div style="padding-left:10px;" class="col-md-12 span_4">
                  <div class="activity_box">
                    <h3>My Refferals List</h3>
					
                    <div class="scrollbar scrollbar1" id="style-2">
                      <?php
				$q = "SELECT *
				FROM coin_transaction
				
				order by id";
				$r = mysql_query("$q");
				
				while($record = mysql_fetch_array($r)){ 
		
		     		$id = $record['id'] ; 
		      		$transaction_reference = $record['transaction_reference'] ; 
			  		$created_date = $record['created_date'] ; 
			  		$coin_amount = $record['coin_amount'] ; 
			  		$transaction_type = $record['transaction_type'] ; 
					$coin_type1 = $record['coin_type'] ; 
			  		$created_date = $record['created_date'] ; 
			  		$status1 = $record['status'] ;
					
					     if ( $status1 == "0" )  {$status = "Pending"; }
					else if ( $status1 == "4" )  {$status = "Approve"; }
					else if ( $status1 == "8" )  {$status = "Rejected";}
					else if ( $status1 == "9" )  {$status = "Deleted"; }
					
					
					     if ( $coin_type1 == "1" )  {$coin_type = "BTC"; }
					else if ( $coin_type1 == "2" )  {$coin_type = "ETH"; }
					else if ( $coin_type1 == "3" )  {$coin_type = "RDD";}
					else if ( $coin_type1 == "4" )  {$coin_type = "PND"; }
					
					if ( $transaction_type == "1" ) /* Sell */
					{
						$symbol = "-";
						$font_color = "#ff1a1a";
					}
					else if ( $transaction_type == "2" ) /* Buy */
					{
						$symbol = "+";
						$font_color = "#33ff33";
					}
					
					
			    ?>
                      <div id="myBtn"  class="activity-row">
                        <div class="col-xs-3 activity-img"><img style="width:50px; height:50px;" src="images/bitcoin_round.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-xs-7 activity-desc">
                          <h5><a href="#"><?php echo $transaction_reference ;?></a></h5>
                          <p><?php echo $created_date ;?></p>
                        </div>
                        <div class="col-xs-2 activity-desc1">
                          <h6> <font color="<?php echo $font_color ;?>"><?php echo $symbol ;?> <?php echo $coin_type ;?> 
                          0.14302015 [ <?php echo $status ;?> ]</font> </h6>
                        </div>
                        <div class="clearfix"> </div>
                      </div>
                      <?php if (mysql_num_rows($r) <= 0)echo "No data.";}?>
                    </div>
                  </div>
                </div>
              </div>
			  
			  
			  
			  
			  
            </div>
          </div>
        </div>
      </div>
      <!--body wrapper start--> 
    </div>
    <!--body wrapper end--> 
  </div>
  
  <!--footer section start-->
  <?php include_once("../Footer/footer.php"); ?>
  <!--footer section end--> 
  
  <!-- main content end--> 
</section>
<script>
function myFunctionSearch() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInputSearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTableSearch");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script> 
<script>
function myFunctionActive() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInputActive");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTableActive");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script> 

<!--/Tab Script start here -->
<?php
  include_once("scripts/tab_script.php") 
  ?>
<!--/Tab Script end here  --> 

<!-- script-for sticky-nav -->
<?php
  include_once("scripts/sticky_navbar_script.php") 
  ?>
<!-- /script-for sticky-nav --> 

<!--pop up scripts start here-->
<?php include_once("scripts/rem_buy_coin_popup_scripts.php"); ?>
<!--pop up scripts end here--> 

<!--pop up scripts start here-->
<?php include_once("scripts/rem_buy_ads_popup_scripts.php"); ?>
<!--pop up scripts end here--> 

<!--pop up scripts start here-->
<?php include_once("scripts/rem_sell_ads_popup_scripts.php"); ?>
<!--pop up scripts end here-->



<!--scripts start here-->
<?php include_once("scripts/index_scripts.php"); ?>
<!--scripts end here-->

</body>
</html>
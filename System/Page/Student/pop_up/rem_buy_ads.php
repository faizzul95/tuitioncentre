<!-- The Pop Up -->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style type="text/css">
p.customfont {
	font-family: 'Montserrat', sans-serif;
}
</style>


<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color: #fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>


<form method="post" action="../Controller/Database_sql.php" enctype="multipart/form-data">
<div id="RemBuyAdsModal" class="modal"> 
  
    <!-- Modal content -->
    <div class="modal-content"> <span class="closeRemBuyAdsModal">&times;</span>
    <p align="center" class="customfont"><font size="5" color="#005B9EFF">Buy Coin Ads</font></p>
    <br />
    <br>
    <font size="2">
	
	
    <div class="col-sm-4">Type Of Coin: </div>
    <div class="col-sm-8">
                  <select style="width:100%;" name="type_of_coin" id="selector1" class="form-control1" required>
                  <?php include_once("type_of_coin.php"); ?>			
				  </select>
                  </div>
    <br>
    <br>
    <br>
	
	
	<div class="col-sm-4">1 BTC equal to MYR: </div>
    <div class="col-sm-8">
      <input type="text" name="one_coin_equal_to_myr"  class="form-control1" id="mediuminput" value="" required>
    </div>
    <br>
    <br>
    <br>
	
	
	<div class="col-sm-4">Maximum BTC price: </div>
    <div class="col-sm-8">
      <input type="text" name="maximum_coin_price"  class="form-control1" id="mediuminput" value="" required>
    </div>
    <br>
    <br>
    <br>
	
	
	
	<div class="col-sm-4">Minimum BTC Amount: </div>
    <div class="col-sm-8">
      <input type="text" name="minimum_coin_price"  class="form-control1" id="mediuminput" value="" required>
    </div>
    <br>
    <br>
    <br>
	
	
	
	<div class="col-sm-4">Maximum BTC Amount: </div>
    <div class="col-sm-8">
      <input type="text" name="maximum_coin_amount"  class="form-control1" id="mediuminput" value="" required>
    </div>
    <br>
    <br>
    <br>
	
	
	<div class="col-sm-4">BTC Address: </div>
    <div class="col-sm-8">
      <input type="text" name="coin_address"  class="form-control1" id="mediuminput" value="" required>
    </div>
    <br>
    <br>
    <br>
	
	
	<div class="col-sm-4">Payment Method: </div>
    <div class="col-sm-8">
                  <select style="width:100%;" name="payment_method" id="selector1" class="form-control1" required>           
				  <?php include_once("type_of_payment_method.php"); ?>			
				  </select>
                  </div>
    <br>
    <br>
    <br>
	
	
	<div class="col-sm-4">Payment Window: </div>
    <div class="col-sm-8">
                  <select style="width:100%;" name="payment_window" id="selector1" class="form-control1" required>           
				  <?php include_once("type_of_payment_window.php"); ?>			
				  </select>
                  </div>
    <br>
    <br>
    <br>
	
	
	
	<div class="col-sm-4">Bank Name: </div>
    <div class="col-sm-8">
                  <select style="width:100%;" name="acc_bank_type" id="selector1" class="form-control1" required>           
				  <?php include_once("./bank_list/bank_list_rem_buy_ads.php"); ?>	
				  </select>
                  </div>
    <br>
    <br>
    <br>
    
	
	<div class="col-sm-4">Bank Account Number: </div>
    <div class="col-sm-8">
      <input type="text" name="acc_bank_no"  class="form-control1" id="mediuminput" value="" required>
    </div>
    <br>
    <br>
    <br>
	
	
	<div class="col-sm-4">Bank Account Holder Name: </div>
    <div class="col-sm-8">
      <input type="text" name="acc_bank_holder"  class="form-control1" id="mediuminput" value="" required>
    </div>
    <br>
    <br>
    <br>
	
	
	
	<div class="col-sm-4">Your Pin Code: </div>
    <div class="col-sm-8">
      <input type="text" name="pin_code"  class="form-control1" id="mediuminput" value="" required>
    </div>
    <br>
    <br>
    <br>
			
   
    
      
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
       <input type="hidden" class="form-control" name="transaction_type" value='2' >
       
       <input type="hidden" class="form-control" name="user_id" value='<?php echo $user_id; ?>' >
       <button style="width:100%;" name="include" class="button">Submit</button>
    </div>
    <div class="col-sm-2"></div>
    <br>
    <br>
    <br>
    <br>
    </font> 
    
    
  </div>
</div>
</form>
<!-- The Pop Up -->
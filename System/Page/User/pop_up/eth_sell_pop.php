<!-- The Pop Up -->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style type="text/css">
p.customfont {
	font-family: 'Montserrat', sans-serif;
}
</style>


<form method="post" action="../Controller/Database_sql.php" enctype="multipart/form-data">
<div id="SellETHModal" class="modal"> 
  
    <!-- Modal content -->
    <div class="modal-content"> <span class="closeSellETHModal">&times;</span>
    <p align="center" class="customfont"><font size="5" color="#005B9EFF">Sell Ethereum</font></p>
    <br />
    <br>
    <font size="2">
    <div class="col-sm-4">How much would you like to buy ( RM )?</div>
    <div class="col-sm-4">
      <input id="x1" name="RM_amount" data-in="" class="form-control" type="text" required />
      <input type="hidden" id="y1" data-in="" value="32839.52" type="text" />
    <div id="d"></div>
    </div>
    <div class="col-sm-4">
    <?php include ("scripts/calculation_myr_to_btc_scripts.php") ; ?>
    </div>
    <br>
    <br>
    <br>
    
    
    <?php /*?><div class="col-sm-4">Available:</div>
    <div class="col-sm-8">
      <input type="text" class="form-control1" id="mediuminput" value="BTC 0.00450000" >
    </div>
    <br>
    <br>
    <br><?php */?>
    
    
    
    <div class="col-sm-4">Acc Bank Type:</div>
    <div class="col-sm-8">
      <select style="width:100%;" name="acc_bank_type" id="selector1" class="form-control1" required>
      <?php include("bank_list/bank_list_eth_sell.php"); ?>			
	  </select>
    </div>
    <br>
    <br>
    <br>
    
    
    <div class="col-sm-4">Acc Bank Number:</div>
    <div class="col-sm-8">
      <input type="text" name="acc_bank_no"  class="form-control1" id="mediuminput" required  >
    </div>
    <br>
    <br>
    <br>
    
    
    
    <div class="col-sm-4">Acc Bank Holder Name:</div>
    <div class="col-sm-8">
      <input type="text" name="acc_bank_holder" class="form-control1" id="mediuminput"  required  >
    </div>
    <br>
    <br>
    <br>
    
    
    
    <div class="col-sm-4">ETH Address:</div>
    <div class="col-sm-8">
      <input type="text" class="form-control1" id="mediuminput" name="coin_address"  required  >
    </div>
    <br>
    <br>
    <br>
    
    <div class="col-sm-4">Transaction Reference:</div>
    <div class="col-sm-8">
      <input type="text" class="form-control1" id="mediuminput" name="transaction_reference"  required  >
    </div>
    <br>
    <br>
    <br>
    
    
    <div class="col-sm-4">Pin Code:</div>
    <div class="col-sm-8">
      <input type="text" class="form-control1" id="mediuminput" name="pin_code" required >
    </div>
    <br>
    <br>
    <br>
    
    
    
    <div class="col-sm-12">
    
    <?php /*?>KCM Exchnger Bank Info :<br />
    Bank Name : CIMB Bank<br />
    Acc Holder: RungusTP Holding
    <br /><br /><?php */?>
    <font color="#FF0000">
    * Please make sure you put <b><?php echo $referral_code; ?></b>  in Reference part when you bank in to us<br />
    * Please make sure your ETH Address is valid. We will not responsible for wrong ETH Address information.
    </font>
    </div>
    <br>
    <br>
    <br>
    <br>
    
    
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
       <input type="hidden" class="form-control" name="transaction_type" value='1' >
       <input type="hidden" class="form-control" name="type_of_coin" value='2' >
       <input type="hidden" class="form-control" name="user_id" value='<?php echo $user_id; ?>' >
       <button style="width:100%;" name="transaction" class="button">Submit</button>
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
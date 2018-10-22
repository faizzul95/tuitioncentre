<!-- The Pop Up -->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style type="text/css">
p.customfont {
	font-family: 'Montserrat', sans-serif;
}
</style>


<form method="post" action="../Controller/Database_sql.php" enctype="multipart/form-data">
<div id="SellBTCModal" class="modal"> 
  
  <!-- Modal content -->
  
  <div class="modal-content"> <span class="closeSellBTCModal">&times;</span>
    <p align="center" class="customfont"><font size="5" color="#005B9EFF">Sell Bitcoin</font></p>
    <br />
    <br>
    <font size="2">
    <div class="col-sm-4">How much would you like to sell?</div>
    <div class="col-sm-4">
      <input id="x" name="coin_amount" data-in="" class="form-control" type="text" required />
      <input type="hidden" id="y" data-in="" value="32839.52" type="text" />
    <div id="d"></div>
    </div>
    <div class="col-sm-4">
    <?php include ("scripts/calculation_btc_to_myr_scripts.php") ; ?>
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
      <?php include("bank_list/bank_list_btc_sell.php"); ?>				
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
    
    
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
       <input type="hidden" class="form-control" name="transaction_type" value='1' >
       <input type="hidden" class="form-control" name="type_of_coin" value='1' >
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
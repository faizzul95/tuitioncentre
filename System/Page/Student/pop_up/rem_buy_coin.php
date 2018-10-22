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
<div id="RemBuyCoinModal" class="modal"> 
  
    <!-- Modal content -->
    <div class="modal-content"> <span class="closeRemBuyCoinModal">&times;</span>
    <p align="center" class="customfont"><font size="5" color="#005B9EFF">Buy BTC</font></p>
    <br />
    <br>
    <font size="2">
	
	
    <div class="col-sm-4">Amount of BTC: *</div>
    <div class="col-sm-8">
      <input type="number" name="acc_bank_no"  class="form-control1" id="mediuminput" value="0.00940099" required  >
    </div>
    <br>
    <br>
    <br>
	
	
	<div class="col-sm-4">Amount of MYR: </div>
    <div class="col-sm-8">
      <input type="text" name="acc_bank_no"  class="form-control1" id="mediuminput" value="266.95" readonly>
    </div>
    <br>
    <br>
    <br>
	
	
	<div class="col-sm-4">Recieve BTC to address: </div>
    <div class="col-sm-8">
      <input type="text" name="acc_bank_no"  class="form-control1" id="mediuminput" value="" required>
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
    * Please make sure your BTC Address is valid. We will not responsible for wrong BTC Address information.
    </font>
    </div>
    <br>
    <br>
    <br>
    <br>
    
	<table id="t01">		
		<tr>
			<th>BUYING FROM</th>
			<th>SINEGY</th> 
		</tr>
		<tr>
			<td>Price</td>
			<td>26,965.26 MYR/BTC</td>
		</tr>
		<tr>
			<td>Amount limits</td>
			<td>0.24702475 BTC - 0.98959900 BTC</td>
		</tr>
		<tr>
			<td>Payment method</td>
			<td>Bank transfer: UOB</td>
		</tr>
		<tr>
			<td>Location</td>
			<td>Malaysia</td>
		</tr>
		<tr>
			<td>Payment window</td>
			<td>15 minutes</td>
		</tr>
    </table>

    
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
       <input type="hidden" class="form-control" name="transaction_type" value='2' >
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
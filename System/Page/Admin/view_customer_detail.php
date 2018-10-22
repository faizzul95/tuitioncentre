<?php include_once("top_header.php"); ?>

<!DOCTYPE HTML>
<html>
<?php include_once("../Header/header.php"); ?>
<?php include_once("css/button/user_wallet_button_css.php"); ?>


    
    
    <div id="page-wrapper">
    <div class="graphs" >
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="" >
    
    <div class="panel-heading" >
      <h2>Detail</h2>
      <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}">
       <span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
    </div>
    
    <form method="post" action="../CONTROLLER/Database_sql.php" enctype="multipart/form-data">
      <div class="row" style="padding-left:5px; padding-right:5px;"> <br>
        <div class="col-md-12">
          <div class="form-group label-floating">
            <label class="control-label"> <font color="#000000"><b>Name:</b></font>
              <?php /*?><font color="#FF0000"><b> <-- Cannot Change --></b></font><?php */?>
            </label>
            <input type="text" class="form-control"  name="fullname" value='Mohd Ashraf' readonly >
          </div>
        </div>
      </div>
      
      <div class="row" style="padding-left:5px; padding-right:5px;">
      
        <div class="col-md-6">
          <div class="form-group label-floating">
            <label class="control-label"> <font color="#000000"><b>Date Registered:</b></font> <font size="1" color="#FF0000">
            <b><-- Cannot Change --></b> </font> </label>
            <input type="text" class="form-control"  value='<?php echo $record['created_date'] ?>' readonly>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="form-group label-floating">
            <label class="control-label"> <font color="#000000"><b>NRIC:</b></font>
              <?php /*?><font color="#FF0000"><b> <-- Cannot Change --></b></font><?php */?>
            </label>
            <input type="text" class="form-control"  name="ic_number"  value='<?php echo $record['ic_number'] ?>' >
          </div>
        </div>
      </div>
      
      
      <div class="row" style="padding-left:5px; padding-right:5px;">
      
        <div class="col-md-6">
          <div class="form-group label-floating">
            <label class="control-label"> <font color="#000000"><b>Phone Number:</label>
            <input type="text" class="form-control"  name="phone_number" value='011- 5240 9241' readonly>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="form-group label-floating">
            <label class="control-label"> <font color="#000000"><b>Email: <font size="1" color="#FF0000"><b> <-- Cannot Change --></b> </font> </label>
            <input type="email" class="form-control" name="email"  value='Azhrafalias55@gmail.com' readonly>
          </div>
        </div>
        
      </div>
      
      
      
      
      
      <input type="hidden" class="form-control" name="id_user" value='<?php echo $record['id'] ?>' >
      <div class="clearfix"></div>
      </div>
      <button style="margin-left:10px" type="submit" name="Update_Profile"  class="btn btn-primary pull-right"> UPDATE</button>
     
     <?php
	 
     if ( $from_page == 'search_customer.php' )
	 {
	 ?>
     <a href="search_customer.php" class="btn btn-primary pull-right">BACK</a>
     <?php
	 }
	 else if ( $from_page == 'view_customer.php' )
	 {
	 ?>
     <a href="view_customer.php?cust_status=<?php echo $status; ?>" class="btn btn-primary pull-right">BACK</a>
     <?php
	 }
	 ?>
     
     
      
      </div>
      
      </div>
     
          
        </form>
  </div>
  </div>
  </div>
  <!--body wrapper end-->
  </div>
  
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
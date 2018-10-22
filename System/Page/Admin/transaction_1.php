<?php include_once("top_header.php"); ?>

<!DOCTYPE HTML>
<html>
<?php include_once("../Header/header.php"); ?>
<?php include_once("css/button/user_wallet_button_css.php"); ?>

<?php
$type_of_coin = $_GET['type_of_coin'];
?>



  <div id="page-wrapper">
    <div class="graphs">
      <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
          <h2>Sell / Buy <?php echo $type_of_coin; ?></h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"> 
          <span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        
        
        <div class="panel-body no-padding" style="display: block;">
          <div id="AddNewCustomer" class="tabcontent">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                
                <div class="card-header" data-background-color="el">
                  <p class="category"></p>
                </div>
                <div class="card-content">
                
                <form method="post" action="transaction_list.php" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group label-floating">
                        <label class="control-label"> <font color="#000000"><b>Type Of Business</label>
                        <select name="type_business" id="selector1" class="form-control1">
                          <option value="1" >Sell</option>
                          <option value="2" >Buy</option>
                        </select>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group label-floating">
                        <label class="control-label"> <font color="#000000"><b>Status</label>
                        <select name="transaction_status" id="selector1" class="form-control1">
                          <option value="1" >Pending</option>
                          <option value="4" >Approved</option>
                        </select>
                      </div>
                    </div>
                    
                  </div>
                  
                  
                  <input type="hidden" name="type_of_coin" value="<?php echo $type_of_coin; ?>" >
                  <button style="margin-right:10px" type="submit" name="view_btc_list"  class="btn btn-primary pull-right">View</button>
                  <?php /*?><a href="<?php echo $from_page; ?>" class="btn btn-primary pull-right">Back </a><?php */?>
             
                  
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
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
<!-- The Pop Up -->

<div id="mySocialAccModal" class="modal"> 
  
  <!-- Modal content -->
  <div class="modal-content"> <span class="closemySocialAcc">&times;</span>
    <div class="scrollbar scrollbar1" id="style-2">
      <div class="activity-row">
      
      
        <form method="post" action="../Controller/Database_sql.php" enctype="multipart/form-data">
        <div style=" padding-top:20px;"  class="col-xs-12 activity-desc">
          <div class="col-sm-2"><img style="width:35px; height:30px ;" src="images/facebook.png" class="img-responsive" alt=""></div>
          <div class="col-sm-10">
            <input type="text" class="form-control1"  name="facebook" required>
          </div>
          <br>
          <br>
        </div>
        
          
        <div style=" padding-top:20px;"  class="col-xs-12 activity-desc">
          <div class="col-sm-2"><img style="width:35px; height:30px ;" src="images/instagram.jpg" class="img-responsive" alt=""></div>
          <div class="col-sm-10">
            <input type="text" class="form-control1"  name="instagram" >
          </div>
          <br>
          <br>
          <br />
          <br />
          <br />
          <br />
        </div>
        
        
        
        <input type="hidden" class="form-control" name="user_id" value='<?php echo $user_id; ?>' >
        <center>
          <button style="width:100%;" name="add_update_social_acc" class="button">Update My Social Accounts</button>
        </center>
        
        
        <div class="clearfix"> </div>
        </form>
      </div>
    </div>
  </div>
  
</div>
<!-- The Pop Up -->
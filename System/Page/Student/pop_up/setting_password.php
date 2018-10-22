<!-- The Pop Up -->

<div id="myPasswordModal" class="modal"> 
  
  <!-- Modal content -->
  <div class="modal-content"> <span class="closemyPassword">&times;</span>
    <div class="scrollbar scrollbar1" id="style-2">
      <div class="activity-row">
      
      
        <form method="post" action="../Controller/Database_sql.php" enctype="multipart/form-data">
        <div style=" padding-top:20px;"  class="col-xs-12 activity-desc">
          <div class="col-sm-1"><i class="material-icons">https</i></div>
          <div class="col-sm-6">Old Password :</div>
          <div class="col-sm-5">
            <input type="password" class="form-control1"  name="oldPass" required>
          </div>
          <br>
          <br>
        </div>
        
        
        <div style=" padding-top:20px;"  class="col-xs-12 activity-desc">
          <div class="col-sm-1"><i class="material-icons">done</i></div>
          <div class="col-sm-6">New Password:</div>
          <div class="col-sm-5">
            <input type="password" class="form-control1" name="newPass"  required>
          </div>
          <br>
          <br>
        </div>
        
        
        <div style=" padding-top:20px;"  class="col-xs-12 activity-desc">
          <div class="col-sm-1"><i class="material-icons">done_all</i></div>
          <div class="col-sm-6">New Password Confirmation:</div>
          <div class="col-sm-5">
            <input type="password" class="form-control1"  name="newPass2" >
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
          <button style="width:100%;" name="update_password" class="button">Update My Password</button>
        </center>
        
        
        <div class="clearfix"> </div>
        </form>
      </div>
    </div>
  </div>
  
</div>
<!-- The Pop Up -->
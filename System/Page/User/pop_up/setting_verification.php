<!-- The Pop Up -->

<div id="myVerificationModal" class="modal"> 
  
  <!-- Modal content -->
  <div class="modal-content"> <span class="closemyVerification">&times;</span>
    <div class="scrollbar scrollbar1" id="style-2">
      <center>
        <h3> Upload Documents </h3>
      </center>
      <div class="activity-row">
        <div style=" padding-top:20px;"  class="col-xs-12 activity-desc">
          <div class="col-sm-12">
          
            <p align="justify"><font color="#000000">
             Please upload a colour scan or detailed colour photo of the front of your MyKad Malaysian identity card or Malaysian passport.<br />
              <br />
              It should clearly show your details (identity number, names, address, date of birth, photo).<br />
              <br />
              If you don't have any of these documents, see the FAQ for more infomation </font>
            </p>
            
            <br />
            <div class="col-md-12" style="border: 3px solid #dddddd; outline: black thin; padding-top:20px; padding-bottom:20px;">
            <form method="post" action="../Controller/Database_sql.php" enctype="multipart/form-data">
			<div id="drop">
				<input type="file" name="fileToUpload1" />
			</div>

			<ul>
				<!-- The file uploads will be shown here -->
			</ul>

		   </form>
        
           </div>
           <br /><br /><br /><br />
        
        
        
            <p align="justify"><font color="#000000"> Once your documents are submitted, they will be reviewed and you will receive an email with the result.
             This usually takes two business days.<br />
              <br />
              If you experience any difficulties, please contact support.<br />
              <br />
              </font>
            </p>
            
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
          <button style="width:100%;" name="upload_ic" class="button">Submit</button>
        </center>
        <div class="clearfix"> </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- The Pop Up --> 


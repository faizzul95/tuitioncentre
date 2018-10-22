<?php
error_reporting(0);
session_start();

$user_id=$_SESSION['id'];
$username=$_SESSION['username'];
$name=$_SESSION['name'];
$level=$_SESSION['level'];

?>
<?php if (!isset($_SESSION['id'])) 
{
echo "<script type='text/javascript'>alert('Wrong Username /Password / Recaptcha Or Your ID Not Activated Yet,Please Try Again');</script>";
echo "<script type='text/javascript'> document.location='../../../Website/index.php'; </script>";
} 
?>

<!--Connect start here-->
<?php include_once("../Controller/Connect.php"); ?>
<!--Connect end here-->

<!--Database start here-->
<?php include_once("../Controller/Database_sql.php"); ?>
<!--Database end here-->

<!DOCTYPE HTML>
<html>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<?php include_once("../Header/header.php"); ?>

<br><br>
  <div id="page-wrapper">
    <div class="graphs">
    
     <div style="padding-top:10px;" class="col-md-3 widget widget1">
          <div class="r3_counter_box"> <i class="fa fa-users"></i>
            <div class="stats">
              <h5>100<span></span></h5>
              <div style="height:40px" class="grow grow1">
                <p>No Of All Customer</p>
              </div>
            </div>
          </div>
        </div>
        
        
        
        <div style="padding-top:10px;" class="col-md-3 widget widget1">
          <div class="r3_counter_box"> <i class="fa fa-eye"></i>
            <div class="stats">
              <h5><span>%</span></h5>
              <div style="height:40px" class="grow grow3">
                <p>No Of New Customer</p>
              </div>
            </div>
          </div>
        </div>
        
        <div style="padding-top:10px;" class="col-md-3 widget widget1">
          <div class="r3_counter_box"> <i class="fa fa-users"></i>
            <div class="stats">
              <h5>50 <span>%</span></h5>
              <div style="height:40px" class="grow grow1">
                <p>Pending Transactions</p>
              </div>
            </div>
          </div>
        </div>
        
        <div style="padding-top:10px;" class="col-md-3 widget">
          <div class="r3_counter_box"> <i class="fa fa-usd"></i>
            <div class="stats">
              <h5>70 <span>%</span></h5>
              <div style="height:40px" class="grow grow2">
                <p>Approved Transactions</p>
              </div>
            </div>
          </div>
        </div>
        
        
        
        <div style="padding-top:10px;" class="col-md-3 widget widget1">
          <div class="r3_counter_box"> <i class="fa fa-users"></i>
            <div class="stats">
              <h5>50 <span></span></h5>
              <div style="height:40px" class="grow grow1">
                <p>Lorry Order</p>
              </div>
            </div>
          </div>
        </div>
        
        <div style="padding-top:10px;" class="col-md-3 widget widget1">
          <div class="r3_counter_box"> <i class="fa fa-users"></i>
            <div class="stats">
              <h5>50 <span></span></h5>
              <div style="height:40px" class="grow grow1">
                <p>Manpower</p>
              </div>
            </div>
          </div>
        </div>
        
        <div style="padding-top:10px;" class="col-md-3 widget widget1">
          <div class="r3_counter_box"> <i class="fa fa-eye"></i>
            <div class="stats">
              <h5>70 <span></span></h5>
              <div style="height:40px" class="grow grow3">
                <p>Downline</p>
              </div>
            </div>
          </div>
        </div>
        
        <div style="padding-top:10px;" class="col-md-3 widget">
          <div class="r3_counter_box"> <i class="fa fa-usd"></i>
            <div class="stats">
              <h5>70 <span></span></h5>
              <div style="height:40px" class="grow grow2">
                <p>Commision</p>
              </div>
            </div>
          </div>
        </div>
        
        
        
         <div style="padding-top:10px;" class="col-md-3 widget widget1">
          <div class="r3_counter_box"> <i class="fa fa-users"></i>
            <div class="stats">
              <h5>50 <span>RDD</span></h5>
              <div style="height:40px" class="grow grow1">
                <p>Sold RDD</p>
              </div>
            </div>
          </div>
        </div>
        
        <div style="padding-top:10px;" class="col-md-3 widget widget1">
          <div class="r3_counter_box"> <i class="fa fa-users"></i>
            <div class="stats">
              <h5>50 <span>RDD</span></h5>
              <div style="height:40px" class="grow grow1">
                <p>Bought RDD</p>
              </div>
            </div>
          </div>
        </div>
        
        <div style="padding-top:10px;" class="col-md-3 widget widget1">
          <div class="r3_counter_box"> <i class="fa fa-eye"></i>
            <div class="stats">
              <h5>70 <span>PND</span></h5>
              <div style="height:40px" class="grow grow3">
                <p>Sold PND</p>
              </div>
            </div>
          </div>
        </div>
        
        <div style="padding-top:10px;" class="col-md-3 widget">
          <div class="r3_counter_box"> <i class="fa fa-usd"></i>
            <div class="stats">
              <h5>70 <span>PND</span></h5>
              <div style="height:40px" class="grow grow2">
                <p>Bought PND</p>
              </div>
            </div>
          </div>
        </div>
        
        
        <div class="clearfix"> </div>
      </div>
    </div>
    <!--body wrapper start--> 
  </div>
  <!--body wrapper end--> 
</div>

<!--footer section start-->
<?php include_once("../Footer/footer.php"); ?>
<!--footer section end--> 

<!--scripts start here-->
<?php include_once("scripts/index_scripts.php"); ?>
<!--scripts end here-->

</body>
</html>
<?php 
 // include_once("connection.php");
?>

<?php
  $sql = "SELECT * from geoloc";
  $sql_geo = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $row_geo = mysqli_fetch_all($sql_geo,MYSQLI_ASSOC);

  $sql = "SELECT distinct `geo_state` from geoloc order by `geo_state` asc";
  $sql_state = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $states = mysqli_fetch_all($sql_state,MYSQLI_ASSOC);
  // print_r($state);
  $sql = "SELECT distinct `geo_dist` from geoloc order by `geo_dist` asc";
  $sql_dist = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $dist = mysqli_fetch_all($sql_dist,MYSQLI_ASSOC);

  $sql = "SELECT distinct `geo_city` from geoloc order by `geo_city` asc";
  $sql_city = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
  $city = mysqli_fetch_all($sql_city,MYSQLI_ASSOC);

  if( isset($_GET['check']) )
  {
    $ch = $_GET['check'];
    $lat = $_GET['lat'];
    $lon = $_GET['lon'];

    // echo $lat."<br>";
    // echo $lon."<br>";
  }

?>

<script type="text/javascript">
  var row_geo = <?php echo json_encode($row_geo); ?>;
  var states = <?php echo json_encode($states); ?>;
  var dist = <?php echo json_encode($dist); ?>;
  var city = <?php echo json_encode($city); ?>;
</script>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Tuition Center || Sign-Up Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='register/text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="register/css/style.css">  
</head>

<body>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">FOR COMMUNITY</a></li>
        <li class="tab"><a href="#login">FOR TUITION CENTRE</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>REGISTER AS STUDENT / PARENT</h1>
          
          <form action="controller.php" method="post">

              <div class="field-wrap">
                <label>
                  Username<span class="req">*</span>
                </label>
                <input style="color: #C0C0C0;" type="text" name="username" required autocomplete="off"/>
              </div>

              <div class="field-wrap">
                <label>
                  Set A Password<span class="req">*</span>
                </label>
                <input style="color: #C0C0C0;" type="password" name="password" required autocomplete="off"/>
              </div>

              <div class="field-wrap">
                <label>
                  User Type <span class="req">*</span>
                </label>
                <select style="color: #C0C0C0;" name="user_type" required>
                    <option value="">-- Please Select --</option>
                    <option value="student">Student</option>
                    <option value="parent">Parent</option>
                </select>
              </div>
              
              <button type="submit" name="register_student" class="button button-block"/>REGISTER</button>      
          </form>
        </div>
        
        <div id="login">   
          <h1>REGISTER AS TUITION CENTRE</h1>

          <form action="controller.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Email <span class="req">*</span>
              </label>
              <input style="color: #C0C0C0;" type="text" name="tuition_email" required autocomplete="off" required />
            </div>
        
            <div class="field-wrap">
              <label>
                Password <span class="req">*</span>
              </label>
              <input style="color: #C0C0C0;" type="password" name="password" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
             Owner Name <span class="req">*</span>
            </label>
            <input style="color: #C0C0C0;" type="text" name="username" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Phone Number <span class="req">*</span>
            </label>
            <input style="color: #C0C0C0;" type="text" name="tuition_telno" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Tuition Centre Name<span class="req">*</span>
            </label>
            <input style="color: #C0C0C0;" type="text" name="tuition_name" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Tuition Address<span class="req">*</span>
            </label>
            <input style="color: #C0C0C0;" type="text" name="tuition_address" required autocomplete="off"/>
          </div>

           <!-- <div class="top-row">
            <div class="field-wrap">
              <label>
                State <span class="req">*</span>
              </label> -->
              <!-- <input  type="text" name="ic_no" required autocomplete="off" required /> -->
              <!-- <select name="tuition_state" id="tuition_state" onchange="state_change()" required>
                <option value="">Choose State</option> -->
                  <?php
                    // foreach ($states as $s) {
                    //   $ss = $s['geo_state'];
                    //   echo "<option value='$ss'>$ss</option>";
                    // }
                  ?>
              <!-- </select>
            </div> -->
            
            <!-- <div class="top-row"> -->
           <!--  <div class="field-wrap">
              <label>
                District <span class="req">*</span>
              </label> -->
              <!-- <input  type="text" name="ic_no" required autocomplete="off" required /> -->
              <!-- <select name="tuition_dist" id="tuition_dist" onchange="dist_change()" required>
                <option value="">-- Choose District --</option>
              </select>
            </div> -->

            <!-- <div class="field-wrap">
              <label>
                Area <span class="req">*</span>
              </label>
              <select name="tuition_city" id="tuition_city" required>
                <option value="">-- Choose Area --</option>
              </select>
            </div>
          </div> -->
          <input type="hidden" name="lat" value="<?php echo $lat; ?>">
          <input type="hidden" name="lon" value="<?php echo $lon; ?>">
          <button name="register_tuition" type="submit" class="button button-block"/>REGISTER</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="register/js/index.js"></script>

  <script type="text/javascript">
  function state_change()
  {
      var s = $('#tuition_state').val();
      var d;

      check_state = [];
      $("#tuition_dist").empty();
      $("#tuition_dist").append(new Option('-- Choose District --',''));
      $("#tuition_city").empty();
      for (i=0; i< row_geo.length; i++)
      {   
          if( row_geo[i]['geo_state'].localeCompare(s) == 0 )
          {
              d = row_geo[i]['geo_dist'];
              if( check_state.indexOf(d) == -1 )
              {
                  $("#tuition_dist").append(new Option(d, d));
                  check_state.push(d);
              }
          }
      }
  }

  function dist_change()
  {
      var d = $('#tuition_dist').val();
      var c;

      check_dist = [];
      $("#tuition_city").empty();
      $("#tuition_city").append(new Option('-- Choose Area --',''));
      for (i=0; i< row_geo.length; i++)
      {   
          if( row_geo[i]['geo_dist'].localeCompare(d) == 0 )
          {
              c = row_geo[i]['geo_city'];
              if( check_dist.indexOf(c) == -1 )
              {
                  $("#tuition_city").append(new Option(c, c));
                  check_dist.push(c);
              }

          }
      }
  }

  </script>

   <span id='check_loc' hidden><?php echo $ch; ?></span><br>
    <script type="text/javascript">
      $( document ).ready(function (){
          if ( $('#check_loc').text() != 'fal' ){
              if (navigator.geolocation){
                navigator.geolocation.getCurrentPosition(get_loc);
              }
              else{
                alert("Geolocation is not supported by this browser.");
              }
          }

      })

      function get_loc(position){
          var lat = position.coords.latitude;
          var lon = position.coords.longitude;
          // alert(lat);

          window.location.href = "register.php?check=fal&lat="+lat+"&lon="+lon;
      }

    </script>


</body>

</html>


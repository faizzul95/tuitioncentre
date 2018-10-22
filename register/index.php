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
        <li class="tab active"><a href="#signup">FOR STUDENT</a></li>
        <li class="tab"><a href="#login">FOR TUITION CENTRE</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>REGISTER AS STUDENT</h1>
          
          <form action="controller.php" method="post">
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Identity Card (IC No)<span class="req">*</span>
              </label>
              <input style="color: #C0C0C0;" type="text" name="ic_no" required autocomplete="off" required />
            </div>
        
            <div class="field-wrap">
              <label>
                Phone Number <span class="req">*</span>
              </label>
              <input style="color: #C0C0C0;" type="text" name="phone_number" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Name <span class="req">*</span>
            </label>
            <input style="color: #C0C0C0;" type="text" name="name" required autocomplete="off"/>
          </div>
          
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
              <input style="color: #C0C0C0;" type="text" name="email" required autocomplete="off" required />
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
              Name <span class="req">*</span>
            </label>
            <input style="color: #C0C0C0;" type="text" name="name" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Phone Number <span class="req">*</span>
            </label>
            <input style="color: #C0C0C0;" type="text" name="phone_number" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Tuition Centre Name<span class="req">*</span>
            </label>
            <input style="color: #C0C0C0;" type="text" name="tuition_centre_name" required autocomplete="off"/>
          </div>

           <div class="top-row">
            <div class="field-wrap">
              <label>
                State <span class="req">*</span>
              </label>
              <!-- <input  type="text" name="ic_no" required autocomplete="off" required /> -->
              <select style="color: #C0C0C0;" name="state" id="location">
                  <option value="">Choose State</option>
                  <option value="JOHOR">JOHOR</option>
                  <option value="KEDAH">KEDAH</option>
                  <option value="KELANTAN">KELANTAN</option>
                  <option value="LABUAN">LABUAN</option>
                  <option value="MELAKA">MELAKA</option>
                  <option value="NEGERI SEMBILAN">NEGERI SEMBILAN</option>
                  <option value="PERAK">PERAK</option>
                  <option value="PAHANG">PAHANG</option>
                  <option value="PERLIS">PERLIS</option>
                  <option value="PULAU PINANG">PULAU PINANG</option>
                  <option value="SABAH">SABAH</option>
                  <option value="SARAWAK">SARAWAK</option>
                  <option value="SELANGOR">SELANGOR</option>
                  <option value="TERENGGANU">TERENGGANU</option>
              </select>
            </div>
        
            <div class="field-wrap">
              <label>
                Area <span class="req">*</span>
              </label>
              <input style="color: #C0C0C0;" type="text" name="area" required autocomplete="off"/>
            </div>
          </div>

          <button name="register_tuition" type="submit" class="button button-block"/>REGISTER</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="register/js/index.js"></script>
</body>

</html>

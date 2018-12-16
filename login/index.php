<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='register/text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="register/css/style.css">  
</head>

<body>

  <div class="form">
      
      
      
      <div class="content">
        <div id="login">   
          <h1>LOGIN</h1>
          
          <form action="controller.php" method="post">
          
            <div class="field-wrap">
            <label>
              Username <span class="req">*</span>
            </label>
            <input style="color: #C0C0C0;" type="text" id="username" name="username" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input style="color: #C0C0C0;" type="password" name="password" required autocomplete="off"/>
          </div>
          <span style="float: right"><u><a onclick="forgot()">Forgot password</a></u></span>
          <button type="submit" name="signin" class="button button-block"/>LOGIN</button>
          
          </form>

        </div>

      </div>
        
  </div><!-- tab-content -->
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="register/js/index.js"></script>
</body>

</html>
<script type="text/javascript">
  function forgot()
  {
    var username = $('#username').val();
    url = "controller.php?forgotpass=";

    window.location.href = url+username;
  }
</script>
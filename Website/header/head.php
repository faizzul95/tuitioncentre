<head>
<!--Connect start here-->
<?php include("../System/Page/Controller/Connect.php"); ?>
<!--Connect end here-->
<!--Database start here-->
<?php include("../System/Page/Controller/Database_sql.php"); ?>
<!--Database end here-->

<?php

   error_reporting(0);
   session_start();
   
   $user_id=$_SESSION['id'];
   $username=$_SESSION['username'];
   $name=$_SESSION['name'];
   $refer_code=$_SESSION['refer_code'];
   $level=$_SESSION['level'];
   
   
    $sql = "SELECT * FROM user
	WHERE id = '$user_id' LIMIT 1";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_assoc($res);
	
	$ic_no = $row['ic_no'];

   ?>

      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="robots" content="index, follow" />
      <meta name="keywords" content="EPICOR ERP, KOFAX IMAGING SOLUTIONS, Integrated customer relationship management, Efficient sales order management, Substantial customer service, Extensive product data management, Advanced manufacturing planning and scheduling,, Real-time production management, Comprehensive supply chain management, Accurate finance and accounting, Out-of-the-box eBusiness, Effective business performance management, Finsoft" />
      <meta name="title" content="Home" />
      <meta name="author" content="Administrator" />
      <meta name="description" content="Established in March 1998, Finsoft Systems Sdn Bhd prides ourselves as international vendors and also experts in area of enterprise resource planning (ERP) software and services
         With more than 20 years experience in the industry, we are highly renowned for delivering quality products and tailored services. We are a certified partner with Epicor for six years and Value-Added Reseller(VAR) of Kofax ." />
      <meta name="generator" content="Joomla! 1.5 - Open Source Content Management" />
      <title>Welcome to Tuition Community Portal</title>
      <link rel="stylesheet" href="plugins/system/cdscriptegrator/libraries/highslide/css/highslide.css" type="text/css" />
      <link rel="stylesheet" href="media/com_acymailing/css/module_default3f10.css?v=1395195571" type="text/css" />
      <script type="text/javascript" src="plugins/system/cdscriptegrator/libraries/highslide/js/highslide-full.min.js"></script>
      <script type="text/javascript" src="plugins/system/cdscriptegrator/libraries/jquery/js/jquery-1.4.4.min.js"></script>
      <script type="text/javascript" src="plugins/system/cdscriptegrator/libraries/jquery/js/jquery-noconflict.js"></script>
      <script type="text/javascript" src="plugins/system/mtupgrade/mootools.js"></script>
      <script type="text/javascript" src="media/system/js/caption.js"></script>
      <script type="text/javascript" src="media/com_acymailing/js/acymailing_moduleb57c.js?v=460"></script>
      <script type="text/javascript">
         <!--
         hs.graphicsDir = 'plugins/system/cdscriptegrator/libraries/highslide/graphics/index.html';
           	hs.outlineType = 'rounded-white';
           	hs.outlineWhileAnimating = true;
           	hs.showCredits = true;
           	hs.expandDuration = 250;
         hs.anchor = 'auto';
         hs.align = 'auto';
         hs.transitions = ["expand"];
         hs.dimmingOpacity = 0;
         hs.lang = {
            loadingText :     'Loading...',
            loadingTitle :    'Click to cancel',
            focusTitle :      'Click to bring to front',
            fullExpandTitle : 'Expand to actual size',
            fullExpandText :  'Full size',
            creditsText :     'Powered by Highslide JS',
            creditsTitle :    'Go to the Highslide JS homepage',
            previousText :    'Previous',
            previousTitle :   'Previous (arrow left)',
            nextText :        'Next',
            nextTitle :       'Next (arrow right)',
            moveTitle :       'Move',
            moveText :        'Move',
            closeText :       'Close',
            closeTitle :      'Close (esc)',
            resizeTitle :     'Resize',
            playText :        'Play',
            playTitle :       'Play slideshow (spacebar)',
            pauseText :       'Pause',
            pauseTitle :      'Pause slideshow (spacebar)',   
            number :          'Image %1 of %2',
            restoreTitle :    'Click to close image, click and drag to move. Use arrow keys for next and previous.'
         };
         //-->
         
         var acymailing = Array();
         		acymailing['NAMECAPTION'] = 'Name';
         		acymailing['NAME_MISSING'] = 'Please enter your name';
         		acymailing['EMAILCAPTION'] = 'E-mail';
         		acymailing['VALID_EMAIL'] = 'Please enter a valid e-mail address';
         		acymailing['ACCEPT_TERMS'] = 'Please check the Terms and Conditions';
         		acymailing['CAPTCHA_MISSING'] = 'Please enter the security code displayed in the image';
         		acymailing['NO_LIST_SELECTED'] = 'Please select the lists you want to subscribe to';
         
      </script>
      <link rel="stylesheet" href="templates/system/css/system.css" type="text/css" />
      <link rel="stylesheet" href="templates/system/css/general.css" type="text/css" />
      <link rel="stylesheet" href="templates/finsoft/css/style.css" type="text/css" />
      <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
      <meta http-equiv="Content-Language" content="en-us">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <script type="text/javascript" src="js/curvy.js"></script>
      <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
      <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
      <link type="text/css" href="templates/finsoft/css/bottom.css" rel="stylesheet" />
      <script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
      <script type="text/javascript" src="templates/finsoft/js/jquery.pikachoose.js"></script>
      <script language="javascript">
         $(document).ready(function (){
         
            var a = function(self){
         
               self.anchor.attr('target','_self');
         
            };
         
            $("#pikame").PikaChoose({carousel:true,buildFinished:a,hoverPause:false,thumbOpacity:0,speed:5000});
         
         });
         
         		
      </script>
      <style>
         .article_separator{
         display:none;
         }
      </style>
      <link rel="stylesheet" type="text/css" href="templates/finsoft/css/slideshow.html" media="screen" />
	  
	  
	  
	  
   <!-- Form head-->
   <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
   <link rel="stylesheet" type="text/css" href="form_template/vendor/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="form_template/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="form_template/fonts/iconic/css/material-design-iconic-font.min.css">
   <link rel="stylesheet" type="text/css" href="form_template/vendor/animate/animate.css">
   <link rel="stylesheet" type="text/css" href="form_template/vendor/css-hamburgers/hamburgers.min.css">
   <link rel="stylesheet" type="text/css" href="form_template/vendor/animsition/css/animsition.min.css">
   <link rel="stylesheet" type="text/css" href="form_template/vendor/select2/select2.min.css">
   <link rel="stylesheet" type="text/css" href="form_template/vendor/daterangepicker/daterangepicker.css">
   <link rel="stylesheet" type="text/css" href="form_template/css/util.css">
   <link rel="stylesheet" type="text/css" href="form_template/css/main.css">
   <!-- Form head-->
   
   </head>
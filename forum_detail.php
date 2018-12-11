<?php session_start(); 

if(isset($_SESSION['user_id'])) 
{
   $usid = $_SESSION['user_id'];
}
if(isset($_SESSION['student_id'])) 
{
   $student_id = $_SESSION['student_id'];
}

include_once("connection.php");
// $sql = "SELECT * FROM `tuition` WHERE `user_id` = '$usid'";
// $sql_usr = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
// $row = mysqli_fetch_array($sql_usr);

$forum_id = $_GET['forum_id'];

$sql = "SELECT * FROM `forum` INNER JOIN `user` ON `user_id` = `forum_user` WHERE `forum_id` = '$forum_id'";
$sql_forum = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
$row = mysqli_fetch_array($sql_forum);

$forum_title = $row['forum_title'];
$forum_desc = $row['forum_desc'];
$forum_date = $row['forum_date'];
if($row['forum_user'] == $usid)
{
  $forum_posted = 'You';
}
else
{
  $forum_posted = $row['user_username'];
}

echo "forum title : $forum_title";
echo "forum desc : $forum_desc";
echo "forum date : $forum_date";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Forum Detail</title>

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.tagsinput.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="main-wrapper">
      <header id="header">
        <div class="header-top-bar">
         <?php include 'header.php'; ?>
        </div>
        <!-- end .header-top-bar -->
      </header> <!-- end #header -->
      <div class="header-page-title job-registration clearfix">
        <div class="title-overlay"></div>
          <div class="container">
            <h1>Forum Detail</h1>
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><a href="forum.php" class="active">Forum List</a></li>
            </ol>
          </div> <!-- end .container -->
        </div>
      </div> <!-- end .header-page-title -->

      <div id="page-content" class="candidate-profile">
        <div class="container">
          <div class="page-content mt30 mb30">
            <div class="">
               <div class="tab-pane active" id="candidate-profile">
                <div class="row">
                  
          
    <div class="row">
      <div class="col-sm-9">
        <div class="review-block">    
          <div class="row">
            <div class="col-sm-12">
              <!-- <img src="review/image/profile.png" class="img-rounded"> -->
              <div class="review-block-name"><h5>Title : <?php echo $forum_title; ?></h5></div>
              <div class="review-block-description"><h6>Description : <?php echo $forum_desc; ?></h6></div>
              <!-- <div class="review-block-name">Package Taken : <a href="#"><?php echo $package_taken; ?></a></div> -->
              <div class="review-block-date" style="float: right"><?php echo $forum_date; ?></div>
            </div>
          </div>
          </div>
          <hr/>         
        </div>
      </div>       
  
          <?php
            $sql = "SELECT * FROM `comment` INNER JOIN `user` ON `user_id` = `com_user` WHERE `com_forum_id` = '$forum_id'";
            $res = mysqli_query($myConnection,$sql) or die("database error:". mysqli_error($myConnection));
            while($row = mysqli_fetch_array($res)){
              $com_desc = $row['com_desc'];
              $com_user = $row['com_user'];
              if ($com_user == $_SESSION['user_id'])
              {
                $username = 'You';
              }
              else
              {
                $username = $row['user_username'];
              }
              $com_date = $row['com_date'];
          ?>        
    <div class="row">
      <div class="col-sm-9">
        <div class="review-block">    
          <div class="row">
            <div class="col-sm-3">
              <img src="review/image/profile.png" class="img-rounded">
              <!-- <div class="review-block-name">By <a href="#"><?php echo $username; ?></a></div> -->
              <!-- <div class="review-block-name">Package Taken : <a href="#"><?php echo $package_taken; ?></a></div> -->
            </div>
            <div class="col-sm-9">            
              <!-- <div class="review-block-title"><?php echo $rating['review_title']; ?></div> -->
              <div class="review-block-description"><?php echo $com_desc; ?></div>
            </div>
            <div class="col-sm-12">
              <div class="review-block-date">By <a href="#"><?php echo $username; ?></a><span style="float: right;"><?php echo $com_date; ?></span></div>
            </div>
          </div>
          </div>
          <hr/>         
        </div>
      </div>
        <?php } ?>
      <div class="col-sm-9">
        <form action="controller.php" method="post">
          <input type="hidden" name="forum_id" value="<?php echo $forum_id; ?>">
          <input type="hidden" name="">
          <textarea rows="4" name="new_com"></textarea><br>
          <input type="submit" name="comm" value="Comment" style="float: right">
        </form>
    </div>
    </div>  
  </div>
</div>

                </div> <!-- end .row -->
              </div> <!-- end .tabe pane -->



            </div> <!-- end .responsive-tabs.dashboard-tabs -->

          </div> <!-- end .page-content -->
        </div> <!-- end .container -->


      </div> <!-- end #page-content -->

      <?php include 'footer.php'; ?>

    </div> <!-- end #main-wrapper -->
    <!-- Scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
      <script src="js/jquery.ba-outside-events.min.js"></script>
      <script src="js/jquery.inview.min.js"></script>
      <script src="js/jquery.responsive-tabs.js"></script>
      <script src="js/jquery.tagsinput.min.js"></script>
      <script src="js/owl.carousel.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/jquery-ui.js"></script>
      <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
      <script src="js/scripts.js"></script>


      <script type="text/javascript">
        $('#tags').tagsInput();

      </script>

    </body>
  </html>
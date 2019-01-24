<?php
    session_start();
    include_once("../connection.php");
    $t_id = $_GET['t_id'];
?>
<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title> Admin | List Of Student</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for colreorder extension demos" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 

        <script type="text/javascript">
            function checkLogout(){
                 return confirm('Are you sure want to logout ?');
             }

              function view_receipt(file_name)
                {
                  var url = "../receipt/";
                  url = url.concat(file_name);

                  window.open(url, "_blank", "resizable=yes,top=100,left=500,width=800,height=800");
                }
        </script>
        
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
              <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.php">
                            <img src="assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> 
                        </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                           
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="assets/layouts/layout/img/avatar.png" />
                                    <span class="username username-hide-on-mobile"> Admin </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="lockscreen.php">
                                            <i class="icon-lock"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href="../logout.php?logout=success" onclick="return checkLogout(this);">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <div class="page-sidebar navbar-collapse collapse">
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="nav-item">
                               <a href="index.php" class="nav-link ">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="heading">
                                <h3 class="uppercase">MAIN MENU</h3>
                            </li>
                            <li class="nav-item start active open">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-user"></i>
                                    <span class="title">User</span>
                                    <span class="arrow"></span>
                                </a>
                               <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="tuition_list.php" class="nav-link ">
                                            <span class="title">Tuition List</span>
                                            <span class="badge badge-info">
                                                <?php 
                                                $result = mysqli_query($myConnection, "SELECT * FROM tuition");
                                                $tuition = mysqli_num_rows($result);

                                                echo "$tuition"; ?>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="parent_list.php" class="nav-link ">
                                            <span class="title">Parent List</span>
                                            <span class="badge badge-success">
                                                <?php 
                                                $result = mysqli_query($myConnection, "SELECT * FROM parent");
                                                $parent = mysqli_num_rows($result);

                                                echo "$parent"; ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="student_list.php" class="nav-link ">
                                            <span class="title">Student List</span>
                                            <span class="badge badge-danger">
                                                <?php 
                                                $result = mysqli_query($myConnection, "SELECT * FROM student");
                                                $Student = mysqli_num_rows($result);

                                                echo "$Student"; ?></span>
                                        </a>
                                    </li>
                                </ul>
                             </li>
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-note"></i>
                                    <span class="title">Feedback</span>
                                    <span class="arrow"></span>
                                </a>
                                 <ul class="sub-menu">
                                    <li class="nav-item ">
                                        <a href="feedback_student_list.php" class="nav-link ">
                                            <span class="title">Student</span>
                                            <span class="badge badge-info">
                                                <?php 
                                                $result = mysqli_query($myConnection, "SELECT * FROM feedback WHERE `user_type` = 'student'");
                                                $Student = mysqli_num_rows($result);

                                                echo "$Student"; ?>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="feedback_parent_list.php" class="nav-link ">
                                            <span class="title">Parent</span>
                                            <span class="badge badge-warning">
                                                <?php 
                                                $result = mysqli_query($myConnection, "SELECT * FROM feedback WHERE `user_type` = 'parent'");
                                                $Parent = mysqli_num_rows($result);

                                                echo "$Parent"; ?>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="feedback_tuition_list.php" class="nav-link ">
                                            <span class="title">Tuition</span>
                                            <span class="badge badge-success">
                                                <?php 
                                                $result = mysqli_query($myConnection, "SELECT * FROM feedback WHERE `user_type` = 'tuition'");
                                                $Tuition = mysqli_num_rows($result);

                                                echo "$Tuition"; ?>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a href="feedback_general_list.php" class="nav-link ">
                                            <span class="title">General</span>
                                           <span class="badge badge-danger">
                                                <?php 
                                                $result = mysqli_query($myConnection, "SELECT * FROM feedback WHERE `user_type` = 'general'");
                                                $General = mysqli_num_rows($result);

                                                echo "$General"; ?>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                               <a href="../forum.php" class="nav-link ">
                                    <i class="icon-pencil"></i>
                                    <span class="title">Forum</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.php">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <a href="#">User</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <a href="tuition_list.php?">Tuition</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <a href="package_list.php?p_id=<?php echo $t_id; ?>">View Package List</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>List Of Student</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">
                                    <?php  
                                    $package_id = $_GET['p_id'];
                                    $query = $myConnection->query("SELECT * FROM tuition_package WHERE package_id = '$package_id'") or die (mysqli_error($myConnection));
                                      $row = $query->fetch_assoc();
                                       $name = $row['package_name'];
                                    ?>
                                    <center><h1>Package : <b><font color="#0099ff"><?php echo $name; ?></font></b></h1></center>
                                    <div class="portlet-title">
                                        <div class="caption font-dark">
                                            <i class="icon-list font-dark"></i>
                                            <span class="caption-subject bold uppercase">List Of Student</span>
                                        </div>
                                        <!-- <div class="tools"> </div> -->
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th> No </th>
                                                    <th> Name </th>
                                                    <th> Telephone Number </th>
                                                    <th> Email </th>
                                                    <th> Gender </th>
                                                    <th> Start Date</th>
                                                    <th> Payment Status</th>
                                                    <!-- <th> Action </th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                             <?php
                                                  $package_id = $_GET['p_id'];
                                                  $result = $myConnection->query("SELECT * FROM `tuition_student_list` 
                                                inner join `student` on `student`.`student_id` = `tuition_student_list`.`student_id` 
                                                inner join `payment` on `payment`.`list_id` = `tuition_student_list`.`list_id`
                                                WHERE `package_id` = '$package_id'") or die (mysqli_error($myConnection));

                                                if($result!=FALSE)
                                                {
                                                    $count = 1;
                                                    while($row = $result->fetch_assoc())
                                                    {
                                                        $ic = $row['student_id'];
                                                        $std_name = $row['student_name'];
                                                        $std_gender = $row['student_gender'];
                                                        $std_telno = $row['student_telno'];
                                                        $std_email = $row['student_email'];
                                                        $std_start_date = $row['start_date'];
                                                        $payment_status = $row['payment_status'];
                                                        $payment_id = $row['payment_id'];
                                                        $payment_receipt = $row['payment_receipt'];
                                                        $list_id = $row['list_id'];
                                                            
                                                        ?>
                                                            <tr>
                                                                <td><center><?php echo $count; ?></center></td>
                                                                  <td><center><?php echo $std_name; ?></center></td>
                                                                  <td><center><?php echo $std_telno; ?></center></td>
                                                                  <td><center><?php echo $std_email; ?></center></td>
                                                                  <td><center><?php echo $std_gender; ?></center></td>
                                                                  <td><center><?php echo $std_start_date; ?></center></td>
                                                                  <td>
                                                                    <?php
                                                                    if ( $payment_status == 'UNPAID')
                                                                    { 
                                                                    ?>
                                                                        <center><?php echo $payment_status; ?></center>
                                                                </center>
                                                                    <?php
                                                                    }
                                                                    elseif ( $payment_status == 'PENDING') 
                                                                    { ?>
                                                                        <center><?php echo $payment_status; ?></center>
                                                                    <?php
                                                                    }
                                                                    else  //paid
                                                                    { ?>
                                                                         <center>
                                                                        <button class="btn btn-primary" data-placement="top" title="View Receipt" onclick="view_receipt('<?php echo $payment_receipt; ?>')">PAID</button>
                                                                        </center>
                                                                    <?php
                                                                    } 
                                                                    ?>
                                                                  </td>
                                                                </td>
                                                            </tr>
                                                 <?php  $count++;
                                                    }
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
             <div class="page-footer">
                <div class="page-footer-inner"> 2019 &copy; Tuition Centre 
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
    
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/table-datatables-colreorder.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>


<?php
    session_start();
    include_once("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title> Admin | Feedback (Student)</title>
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
            function delete_data(id)
            {
                if(confirm("Delete this data ?"))
                {
                    window.location = "controller.php?fedDel="+id;
                }
            }

            function checkLogout(){
                 return confirm('Are you sure want to logout ?');
             }
             function updateStatus(id)
            {
                if(confirm("Mark as read this feedback ?"))
                {
                    window.location = "controller.php?fedRead="+id;
                }
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
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
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
                            <li class="nav-item">
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
                            <li class="nav-item start active open">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-note"></i>
                                    <span class="title">Feedback</span>
                                    <span class="arrow"></span>
                                </a>
                                 <ul class="sub-menu">
                                    <li class="nav-item active open">
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
                                    <li class="nav-item">
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
                                    <a href="#">Feedback</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Feedback List (Student)</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <br>
                         <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-dark">
                                            <i class="icon-list font-dark"></i>
                                            <span class="caption-subject bold uppercase">Feedback List (Student)</span>
                                        </div>
                                        <!-- <div class="tools"> </div> -->
                                    </div>
                                     <div class="portlet-body">
                                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th> No </th>
                                                    <th> Name </th>
                                                    <th> Email </th>
                                                    <th> Date/Time </th>
                                                    <th> Subject </th>
                                                    <th> Message </th>
                                                    <th> Status </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             <?php
                                                  $result = $myConnection->query("SELECT * FROM `feedback` WHERE user_type = 'student' ORDER BY `feedback_status` DESC") or die (mysqli_error($myConnection));

                                                if($result!=FALSE)
                                                {
                                                    $count = 1;
                                                    while($row = $result->fetch_assoc())
                                                    {
                                                        $id = $row['feedback_id'];
                                                        $name = $row['feedback_name'];
                                                        $time = $row['feedback_timestamp'];
                                                        $email = $row['feedback_email'];
                                                        $subject = $row['feedback_subject'];
                                                        $message = $row['feedback_message'];
                                                        $status = $row['feedback_status'];
                                                        ?>
                                                            <tr>
                                                                <td><center><?php echo $count; ?></center></td>
                                                                <td><center><?php echo $name; ?></center></td>
                                                                <td><center><a href="mailto:<?php echo $email; ?>" target="_top"><?php echo $email; ?></a></center></td>
                                                                <td><center><?php echo $time; ?></center></td>
                                                                <td><center><?php echo $subject; ?></center></td>
                                                                <td>
                                                                    <center>
                                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-placement="top" title="View Message" data-target="#messageview" data-backdrop="static" data-whatever="<?php echo $id; ?>" >
                                                                            <span class="glyphicon glyphicon-eye-open"></span>
                                                                        </button>
                                                                    </center>
                                                                </td>
                                                                <td><center><?php echo $status; ?></center></td>
                                                                <td> 
                                                                 <center>
                                                                    <?php if($status != "Read" && $status != "Read & Reply") {?>
                                                                        <button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Mark as read" onclick="updateStatus(<?php echo $id; ?>)">
                                                                          <span class="glyphicon glyphicon-ok"></span> 
                                                                        </button>
                                                                    <?php } ?>
                                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-placement="top" title="Reply" data-target="#productview" data-whatever="<?php echo $id; ?>" >
                                                                        <span class="glyphicon glyphicon-share"></span>
                                                                    </button>
                                                                    <button class="btn btn-danger" data-placement="top" title="Delete" onclick="delete_data(<?php echo $id; ?>)">
                                                                      <span class="glyphicon glyphicon-trash"></span> 
                                                                    </button>
                                                                </center>
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


 <!-- Modal reply feedback -->
 <div class="modal fade" id="productview" tabindex="-1" role="dialog" aria-labelledby="productviewLabel" aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <center><h3 class="modal-title" id="productviewLabel">Reply Feedback</h3></center>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
            <div class="modal-body">...</div>
        </div>
    </div>
   </div>
   <script>
    $('#productview').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;

            $.ajax({
                type: "GET",
                url: "reply_feedback.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.modal-body').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });
    })
</script>



 <div class="modal fade" id="messageview" tabindex="-1" role="dialog" aria-labelledby="productviewLabel" aria-hidden="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <center><h3 class="modal-title" id="productviewLabel">Message</h3></center>
          </div>
            <div class="modal-body">...</div>
        </div>
    </div>
   </div>
   <script>
    $('#messageview').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this);
          var dataString = 'id=' + recipient;

            $.ajax({
                type: "GET",
                url: "view_feedback_message.php",
                data: dataString,
                cache: false,
                success: function (data) {
                    console.log(data);
                    modal.find('.modal-body').html(data);
                },
                error: function(err) {
                    console.log(err);
                }
            });
    })
</script>
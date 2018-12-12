<?php 
include_once("connection.php");
date_default_timezone_set("Asia/Kuala_Lumpur");
 session_start();
// error_reporting(0); 

//register student/parent
if (isset($_POST['register_student'])) 
{
    $username = $_POST['username'];
    $user_type = $_POST['user_type'];
    $password = $_POST['password'];
    
    $sql_usr = "SELECT * FROM `user` WHERE `user_username`='$username'";
    $res_usr = mysqli_query($myConnection,$sql_usr) or die(mysqli_error($myConnection));

    if (mysqli_num_rows($res_usr)>0) 
    {
        echo "<script type='text/javascript'>alert('Fail. This user already exist in system.Please use other username');</script>";
        echo "<script type='text/javascript'> document.location='register.php'; </script>";
    }
    else
    {   
    
        $query_user="INSERT INTO `user` (`user_username`, `user_type`, `user_password`)
                    VALUES ('$username', '$user_type', '$password')";
        $reg_user = mysqli_query($myConnection,$query_user) or die(mysqli_error($myConnection));

        if($reg_user)
        {
            $sql = "SELECT * FROM `user` WHERE `user_username` = '$username'";
            $sql_usr = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
            $row = mysqli_fetch_array($sql_usr);

            $id = $row['user_id'];
            $type = $row['user_type'];
            
	        $_SESSION['user_id'] = $id;
	        $_SESSION['user_type'] = $type;
  
            if($user_type == 'student')
            {
               echo "<script type='text/javascript'> document.location='student_profile-update.php'; </script>";
            }
            else
            {
                echo "<script type='text/javascript'> document.location='parent_profile-update.php'; </script>";
            }
        }
        else 
        {
            echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
            echo "<script type='text/javascript'> document.location='register.php'; </script>";
        }
    }
}


// reg student info (after sign up)
if (isset($_POST['reg_std_info']))
{
    $student_name = $_POST['std_name'];
    $student_ic = $_POST['std_ic'];
    $student_telno = $_POST['std_telno'];
    $student_email = $_POST['std_email'];
    $user_id = $_POST['user_id'];
    $student_gender = $_POST['student_gender'];
    $student_dob = $_POST['std_dob'];
    $date = mysqli_real_escape_string($myConnection, date('Y-m-d'));

    $sql_usr = "SELECT * FROM `student` WHERE `user_id`='$user_id'";
    $check_stud = mysqli_query($myConnection,$sql_usr) or die(mysqli_error($myConnection));
    
    if (mysqli_num_rows($check_stud)>0) 
    {
        $student_id = $_SESSION['student_id'];
        $std_img = save_img('student',$student_id);

        $row = mysqli_fetch_array($check_stud);
        $pic = $row['student_img'];
        if ( $pic != 'user.png' and empty(basename($_FILES["pro_pic"]["name"])) )
        {
            $std_img = $pic;
        }

        if ($_SESSION['user_type'] != 'parent')
        {

            $query_std = "UPDATE `student` SET `student_name`='$student_name', `student_ic`='$student_ic', `student_telno`='$student_telno', `student_email`='$student_email', `student_gender`='$student_gender', `student_dob`='$student_dob', `student_img`='$std_img' WHERE `student_id`='$student_id'";
            $res_std = mysqli_query($myConnection,$query_std) or die(mysqli_error($myConnection)); 
            
            if($res_std)
            {
                echo "<script type='text/javascript'>alert('Successfully Updated.');</script>";
                echo "<script type='text/javascript'> document.location='student_profile.php'; </script>";
            }
            else
            {
                echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
                echo "<script type='text/javascript'> document.location='student_profile-update.php'; </script>";
            }
        }
        else
        {

            $query_std = "UPDATE `student` SET `student_name`='$student_name', `student_ic`='$student_ic', `student_telno`='$student_telno', `student_email`='$student_email', `student_gender`='$student_gender', `student_dob`='$student_dob', `student_img`='$std_img' WHERE `student_id`='$student_id'";
            $res_std = mysqli_query($myConnection,$query_std) or die(mysqli_error($myConnection)); 
            
            if($res_std)
            {
                echo "<script type='text/javascript'>alert('Successfully Updated.');</script>";
                echo "<script type='text/javascript'> document.location='parent_profile.php'; </script>";
            }
            else
            {
                echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
                echo "<script type='text/javascript'> document.location='student_profile-update.php'; </script>";
            }
        }

    }
    else
    {   
	    $query_std="INSERT INTO `student` (`student_name`, `student_ic`, `student_telno`,`student_dob`, `student_gender`, `student_email`,`student_last_update`, `user_id`)
	                    VALUES ('$student_name', '$student_ic', '$student_telno','$student_dob','$student_gender','$student_email','$date','$user_id')";
	    $res_std = mysqli_query($myConnection,$query_std) or die(mysqli_error($myConnection));

	    if($res_std)
	    {
            $last_id = mysqli_insert_id($myConnection);
            $_SESSION['student_id'] = $last_id;

            $std_img = save_img('student',$student_id);
            
            $query_std = "UPDATE `student` SET `student_img`='$std_img' WHERE `student_id`='$last_id'";
            $res_std = mysqli_query($myConnection,$query_std) or die(mysqli_error($myConnection));

            if($res_std)
            {
                echo "<script type='text/javascript'>alert('Successfully Registered.');</script>";
                echo "<script type='text/javascript'> document.location='student_profile.php?id=$user_id'; </script>";
            }

            echo "<script type='text/javascript'>alert('Pic Upload Fail, Please Try Again');</script>";
            echo "<script type='text/javascript'> document.location='student_profile-update.php'; </script>";   
	    }
	    else
	    {
	        echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
	        echo "<script type='text/javascript'> document.location='student_profile-update.php?id=$user_id'; </script>";
	    }
	}
}

// reg parent info (after sign up)
if (isset($_POST['reg_prt_info']))
{
    $user_id = $_POST['user_id'];
    $prt_name = $_POST['prt_name'];
    $prt_ic = $_POST['prt_ic'];
    $prt_telno = $_POST['prt_telno'];
    $prt_email = $_POST['prt_email'];
    $prt_gender = $_POST['prt_gender'];
    $prt_dob = $_POST['prt_dob'];
    $date = mysqli_real_escape_string($myConnection, date('Y-m-d'));
    $prt_img = save_img('parent',$user_id);
    
    $sql_usr = "SELECT * FROM `parent` WHERE `user_id`='$user_id'";
    $check_prt = mysqli_query($myConnection,$sql_usr) or die(mysqli_error($myConnection));
    
    $row = mysqli_fetch_array($check_prt);
    $pic = $row['parent_img'];
    if ( $pic != 'user.png' and empty(basename($_FILES["pro_pic"]["name"])) )
    {
        $prt_img = $pic;
    }

    if (mysqli_num_rows($check_prt)>0) 
    {
        
        $query_prt = "UPDATE `parent` SET `parent_name`='$prt_name', `parent_ic`='$prt_ic', `parent_telno`='$prt_telno', `parent_email`='$prt_email', `parent_gender`='$prt_gender', `parent_dob`='$prt_dob', `parent_img` = '$prt_img' WHERE `user_id`='$user_id'";
        $res_prt = mysqli_query($myConnection,$query_prt) or die(mysqli_error($myConnection)); 
        
        if($res_prt)
        {
            echo "<script type='text/javascript'>alert('Successfully Updated.');</script>";
            echo "<script type='text/javascript'> document.location='parent_profile.php'; </script>";
        }
        else
        {
            echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
            echo "<script type='text/javascript'> document.location='parent_profile-update.php'; </script>";
        }
    }
    else
    {
        $query_prt="INSERT INTO `parent` (`parent_name`, `parent_ic`, `parent_telno`,`parent_dob`, `parent_gender`, `parent_email`,`parent_last_update`, `user_id`, `parent_img`)
                        VALUES ('$prt_name', '$prt_ic', '$prt_telno','$prt_dob','$prt_gender','$prt_email','$date','$user_id', '$prt_img')";
        $res_prt = mysqli_query($myConnection,$query_prt) or die(mysqli_error($myConnection));

        if($res_prt)
        {
            echo "<script type='text/javascript'>alert('Successfully Registered.');</script>";
            echo "<script type='text/javascript'> document.location='parent_profile.php'; </script>";
        }
        else
        {
            echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
            echo "<script type='text/javascript'> document.location='parent_profile-update.php'; </script>";
        }
    }

}

//register children
if (isset($_POST['reg_child']))
{
    $user_id = $_POST['parent_user_id'];
    $student_name = $_POST['std_name'];
    $student_ic = $_POST['std_ic'];
    $student_telno = $_POST['std_telno'];
    $student_email = $_POST['std_email'];
    $student_gender = $_POST['student_gender'];
    $std_dob = $_POST['std_dob'];
    $date = mysqli_real_escape_string($myConnection, date('Y-m-d'));

    $query_std="INSERT INTO `student` (`student_name`, `student_ic`, `student_telno`,`student_dob`, `student_gender`, `student_email`,`student_last_update`, `user_id`)
                    VALUES ('$student_name', '$student_ic', '$student_telno','$std_dob','$student_gender','$student_email','$date','$user_id')";
    $res_std = mysqli_query($myConnection,$query_std) or die(mysqli_error($myConnection));

    if($res_std)
    {
        echo "<script type='text/javascript'>alert('Successfully Registered.');</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
    }
        echo "<script type='text/javascript'> document.location='parent_profile.php?parentid=$user_id'; </script>";
}

// reg tuition
if (isset($_POST['register_tuition'])) 
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = 'tuition';

    $tuition_name = $_POST['tuition_name'];
    $tuition_telno = $_POST['tuition_telno'];
    $tuition_email = $_POST['tuition_email'];
    $tuition_address = $_POST['tuition_address'];
    $tuition_state = $_POST['tuition_state'];
    $tuition_dist = $_POST['tuition_dist'];
    $tuition_area = $_POST['tuition_city'];
    $lat = $_POST['lat'];
    $lon = $_POST['lon'];


    $sql_usr = "SELECT * FROM `user` WHERE `user_username`='$username' ";
    $res_usr = mysqli_query($myConnection,$sql_usr) or die(mysqli_error($myConnection));

    if (mysqli_num_rows($res_usr)>1) 
    {
        echo "<script type='text/javascript'>alert('Fail. This user already exist in system.Please use other username');</script>";
        echo "<script type='text/javascript'> document.location='register.php'; </script>";
    }
    else
    {   
        $query_user="INSERT INTO `user` (`user_username`, `user_type`, `user_password`)
                    VALUES ('$username', '$user_type', '$password')";
        $res_user = mysqli_query($myConnection,$query_user) or die(mysqli_error($myConnection));

        $sql = "SELECT `user_id` FROM `user` WHERE `user_username` = '$username'";
        $sql_usr = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
        $row = mysqli_fetch_array($sql_usr);
        $id = $row['user_id'];

        $query_tuition="INSERT INTO `tuition` (`tuition_name`, `tuition_telno`, `tuition_email`, `tuition_address`, `tuition_state`, `tuition_district`, `tuition_area`, `user_id`, `tuition_lat`, `tuition_lon`)
                    VALUES ('$tuition_name', '$tuition_telno', '$tuition_email', '$tuition_address', '$tuition_state', '$tuition_dist', '$tuition_area', '$id', '$lat', '$lon')";
        $res_tuition = mysqli_query($myConnection,$query_tuition) or die(mysqli_error($myConnection));

        if( $res_user && $res_tuition)
        {
            echo "<script type='text/javascript'>alert('Successfully Registered.Please Login');</script>";
            echo "<script type='text/javascript'> document.location='login.php'; </script>";
        }
        else 
        {
            echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
            echo "<script type='text/javascript'> document.location='register.php'; </script>";
        }
    }

}

//log in user
if(isset($_POST['signin']))   // it checks whether the user clicked login button or not 
{
   
     $username=mysqli_real_escape_string($myConnection, $_POST['username']);
     $password = mysqli_real_escape_string($myConnection, $_POST['password']);
    
     $sql = "SELECT * FROM `user` WHERE `user_username` = '$username' AND `user_password` = '$password'";
     $res = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
     $row = mysqli_fetch_array($res);

     $username = $row['user_username'];
     $usr_id = $row['user_id'];
     $user_type = $row['user_type'];

     if (mysqli_num_rows($res)==0) { 

     	   echo ("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('Wrong Username or Password, Please Try Again')
          window.location = 'login.php';
          </SCRIPT>");
         
     }
     else { 
                      
        $_SESSION['user_id'] = $usr_id;
        $_SESSION['username'] = $username;
        $_SESSION['user_type'] = $user_type;

        if($_SESSION['user_type'] == 'student')
        {   
            $sql = "SELECT `student_id` FROM `student` WHERE `user_id` = '$usr_id'";
            $sql_std = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
            $row = mysqli_fetch_array($sql_std);
            $_SESSION['student_id'] = $row['student_id'];

            echo "<script type='text/javascript'> document.location='student_profile.php?studid=$usr_id'; </script>";
        }
        else if ($_SESSION['user_type'] == 'parent')
        {
            echo "<script type='text/javascript'> document.location='parent_profile.php?parentid=$usr_id'; </script>";
        }
        else  //tuition
        {
            $sql = "SELECT `tuition_id` FROM `tuition` WHERE `user_id` = '$usr_id'";
            $sql_tuition = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
            $row = mysqli_fetch_array($sql_tuition);
            $_SESSION['tuition_id'] = $row['tuition_id'];

            $id = $row['tuition_id'];

            echo "<script type='text/javascript'> document.location='tuition_profile.php?id=$id'; </script>";
        }
     }

}


if(isset($_POST['add_package']))
{
    
    $user_id = $_SESSION['user_id'];
    $tuition_id = $_POST['tuition_id'];
    $package_name = $_POST['package_name'];
    $package_capacity = $_POST['package_capacity'];
    $package_price = $_POST['package_price'];

    $query_package = "INSERT INTO `tuition_package` (`package_name`, `package_capacity`, `package_price`, `tuition_id`)
                    VALUES ('$package_name', '$package_capacity', '$package_price', '$tuition_id')";
    $res_package = mysqli_query($myConnection,$query_package) or die(mysqli_error($myConnection));

    if( $res_package )
    {
        echo "<script type='text/javascript'>alert('Package added Successfully');</script>";
        echo "<script type='text/javascript'> document.location='tuition_profile.php?id=$user_id'; </script>";
    }
    else 
    {
        echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
        echo "<script type='text/javascript'> document.location='tuition_profile.php'; </script>";
    }
    
}


if(isset($_POST['review_package']))
{    
    $package_id = $_POST['package_id'];
    $tuition_id = $_POST['tuition_id'];
    $student_id = $_SESSION['student_id'];
    $review_star = $_POST['starRate'];
    $review_title = $_POST['review_title'];
    $review_comments = $_POST['review_comments'];
    
    $sql_review = "SELECT * FROM `tuition_review` WHERE `package_id`='$package_id' AND `student_id`='$student_id'";
    $res_review = mysqli_query($myConnection,$sql_review) or die(mysqli_error($myConnection));

    if (mysqli_num_rows($res_review)>0)
    {
        echo "<script type='text/javascript'>alert('Package already reviewed');</script>";
        echo "<script type='text/javascript'> document.location='student_profile.php'; </script>";
    }
    else
    {
        $query_review = "INSERT INTO `tuition_review` (`package_id`, `tuition_id`, `review_star`, `review_title`, `review_comments`, `student_id`)
                        VALUES ('$package_id', '$tuition_id', '$review_star', '$review_title', '$review_comments', '$student_id')";
        $res_review = mysqli_query($myConnection,$query_review) or die(mysqli_error($myConnection));

        if( $res_review )
        {
            $sql = "SELECT * FROM `tuition_review` WHERE `tuition_id` = '$tuition_id'";
            $sql_rate = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

            $tot_rate = $count = 0;
            while( $row = mysqli_fetch_array($sql_rate) )
            {
                $tot_rate += $row['review_star'];
                $count++;
            }

            $avg_rate = $tot_rate/$count;

            $query_tuition = "UPDATE `tuition` SET `tuition_rating`='$avg_rate' WHERE `tuition_id`='$tuition_id'";
            $res_tuition = mysqli_query($myConnection,$query_tuition) or die(mysqli_error($myConnection));

            if(!$res_tuition)
            {
                echo "<script type='text/javascript'>alert('Fail to update tuition rating.');</script>";
            }

            echo "<script type='text/javascript'>alert('Review added Successfully');</script>";
            echo "<script type='text/javascript'> document.location='student_profile.php'; </script>";
        }
        else 
        {
            echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
            echo "<script type='text/javascript'> document.location='review_package.php?package_id=$package_id'; </script>";
        }
    }
    
}

if (isset($_POST['update_tuition']))
{
    $tuition_id = $_SESSION['tuition_id'];
    $tuition_name = $_POST['tuition_name'];
    $tuition_telno = $_POST['tuition_telno'];
    $tuition_email = $_POST['tuition_email'];
    $tuition_add = $_POST['tuition_add'];
    $tuition_state = $_POST['tuition_state'];
    $tuition_area = $_POST['tuition_city'];
    $tuit_img = save_img('tuition',$tuition_id);

    $sql = "SELECT * FROM `tuition` WHERE `tuition_id`='$tuition_id'";
    $res = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

    $row = mysqli_fetch_array($res);
    $pic = $row['tuition_img'];
    if ( $pic != 'user.png' and empty(basename($_FILES["pro_pic"]["name"])) )
    {
        $tuit_img = $pic;
    }

    $query_tuition = "UPDATE `tuition` SET `tuition_name`='$tuition_name', `tuition_telno`='$tuition_telno', `tuition_email`='$tuition_email', `tuition_address`='$tuition_add', `tuition_state`='$tuition_state', `tuition_area`='$tuition_area', `tuition_img` = '$tuit_img' WHERE `tuition_id`='$tuition_id'";
    $res_tuition = mysqli_query($myConnection,$query_tuition) or die(mysqli_error($myConnection));

    if( $res_tuition )
    {
        echo "<script type='text/javascript'>alert('Tuition Updated Successfully');</script>";
        echo "<script type='text/javascript'> document.location='tuition_profile.php'; </script>";
    }
    else 
    {
        echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
        echo "<script type='text/javascript'> document.location='tuition_profile-update.php'; </script>";
    }
}

if(isset($_POST['update_package']))
{
    $user_id = $_SESSION['user_id'];
    $package_id = $_POST['package_id'];
    $package_name = $_POST['package_name'];
    $package_capacity = $_POST['package_capacity'];
    $package_price = $_POST['package_price'];

    $sql = "SELECT * FROM `tuition_package_subject` WHERE `package_id` = '$package_id'";
    $sql_subject = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

    while( $row = mysqli_fetch_array($sql_subject) )
    {
        if( !isset($_POST[$row['subject_id']]) )
        {
            $sql_del = "DELETE FROM `tuition_package_subject` WHERE `subject_id` = {$row['subject_id']} AND `package_id` = '$package_id'";
            $res_del = mysqli_query($myConnection,$sql_del) or die(mysqli_error($myConnection));
            // $subject .= ",".$row['subject_name'];
            // $subject .= ",".$row['subject_id'];
        }
    }
    // $subject = substr($subject, 1);

    $query_package = "UPDATE `tuition_package` SET `package_name`='$package_name', `package_capacity`='$package_capacity', `package_price`='$package_price' WHERE `package_id`='$package_id'";
    $res_package = mysqli_query($myConnection,$query_package) or die(mysqli_error($myConnection));

    if( $res_package )
    {
        echo "<script type='text/javascript'>alert('Package Updated Successfully');</script>";
        echo "<script type='text/javascript'> document.location='tuition_profile.php?id=$user_id'; </script>";
    }
    else 
    {
        echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
        echo "<script type='text/javascript'> document.location='edit_package.php?p_id=$package_id'; </script>";
    }
    
}

if(isset($_POST['add_subject']))
{
    $user_id = $_SESSION['user_id'];
    $subject_id = $_POST['subject_id'];
    $day = $_POST['day'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $package_id = $_POST['package_id'];

    $query_package = "INSERT INTO `tuition_package_subject` (`subject_id`, `subject_day`, `subject_start_hour`, `subject_end_hour`, `package_id`)
                    VALUES ('$subject_id', '$day', '$start_time', '$end_time', '$package_id')";
    $res_package = mysqli_query($myConnection,$query_package) or die(mysqli_error($myConnection));

    if( $res_package )
    {
        echo "<script type='text/javascript'>alert('Package Updated Successfully');</script>";
        echo "<script type='text/javascript'> document.location='tuition_profile.php?id=$user_id'; </script>";
    }
    else 
    {
        echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
        echo "<script type='text/javascript'> document.location='add_package_subject.php?p_id=$package_id'; </script>";
    }
    
}

if ( isset($_GET['VIEW_STD']) )
{
    $student_id = $_GET['VIEW_STD'];

    $_SESSION['student_id'] = $student_id;

    echo "<script type='text/javascript'> document.location='student_profile.php?'; </script>";
}

if ( isset($_GET['DEL_PACKAGE']) )
{
    $package_id = $_GET['DEL_PACKAGE'];

    $sql_del = "DELETE FROM `tuition_package` WHERE `package_id` = '$package_id'";
    $res_del = mysqli_query($myConnection,$sql_del) or die(mysqli_error($myConnection));

    if( $res_del )
    {
        echo "<script type='text/javascript'>alert('Package Deleted Successfully');</script>";
        echo "<script type='text/javascript'> document.location='tuition_profile.php?'; </script>";
    }
    else 
    {
        echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
        echo "<script type='text/javascript'> document.location='tuition_profile.php?'; </script>";
    }
}

if ( isset($_GET['REMOVE_STD']) )
{
    $list_id = $_GET['REMOVE_STD'];
    $package_id = $_GET['PACKAGE_ID'];

    $sql_del = "DELETE FROM `tuition_student_list` WHERE `list_id` = '$list_id'";
    $res_del = mysqli_query($myConnection,$sql_del) or die(mysqli_error($myConnection));

    if( $res_del )
    {
        echo "<script type='text/javascript'>alert('Student Removed Successfully');</script>";
        echo "<script type='text/javascript'> document.location='tuition_student_list.php?p_id=$package_id'; </script>";
    }
    else 
    {
        echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
        echo "<script type='text/javascript'> document.location='tuition_student_list.php?p_id=$package_id'; </script>";
    }
}

if(isset($_GET['DEL_FORUM']))
{
    $forum_id = $_GET['DEL_FORUM'];

    $sql_del = "DELETE FROM `forum` WHERE `forum_id` = '$forum_id'";
    $res_del = mysqli_query($myConnection,$sql_del) or die(mysqli_error($myConnection));

    if( $res_del )
    {
        echo "<script type='text/javascript'>alert('Forum deleted Successfully');</script>";
        echo "<script type='text/javascript'> document.location='forum.php'; </script>";
    }
    else 
    {
        echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
        echo "<script type='text/javascript'> document.location='forum.php'; </script>";
    }
}

if (isset($_GET['CANCEL_PACKAGE']))
{
    $student_id = $_SESSION['student_id'];
    $list_id = $_GET['CANCEL_PACKAGE'];
    $payment_id = $_GET['payment_id'];

    $sql_del = "DELETE FROM `tuition_student_list` WHERE `list_id` = '$list_id'";
    $res_del = mysqli_query($myConnection,$sql_del) or die(mysqli_error($myConnection));

    if($res_del)
    {
        $sql_del = "DELETE FROM `payment` WHERE `payment_id` = '$payment_id'";
        $res_del = mysqli_query($myConnection,$sql_del) or die(mysqli_error($myConnection));

        if($res_del)
        {
            echo "<script type='text/javascript'>alert('Package Cancelled Successfully');</script>";
            echo "<script type='text/javascript'> document.location='student_profile.php'; </script>";
        }
    }

    echo "<script type='text/javascript'>alert('Fail, Please try again');</script>";
    echo "<script type='text/javascript'> document.location='student_profile.php'; </script>";

}

if(isset($_POST['std_register_package']))
{
    $student_id = $_SESSION['student_id'];
    $package_id = $_POST['package_id'];
    $start_date = $_POST['start_date'];
    $email = $_POST['student_email'];

    $query_package = "INSERT INTO `tuition_student_list` (`package_id`, `student_id`, `start_date`)
                    VALUES ('$package_id', '$student_id', '$start_date')";
    $res_package = mysqli_query($myConnection,$query_package) or die(mysqli_error($myConnection));

    if( $res_package )
    {   
        $last_id = mysqli_insert_id($myConnection);  
        $query_pay = "INSERT INTO `payment` (`list_id`)
                    VALUES ('$last_id')";
        $res_pay = mysqli_query($myConnection,$query_pay) or die(mysqli_error($myConnection));

        if (!$res_pay)
        {
            echo "<script type='text/javascript'>alert('Payment Data is not stored');</script>";
        }
        // mail function
         $title = "TUITION CENTER";
         $message = "Kelas anda akan bermula pada : ".$start_date;
        
         $to = $email;
         $subject = "PENDAFTARAN TUITION TELAH BERJAYA";

         mail($to, $subject, $message);

        echo "<script type='text/javascript'>alert('Registered Successfully');</script>";
        echo "<script type='text/javascript'> document.location='student_profile.php'; </script>";
    }
    else 
    {
        echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
        echo "<script type='text/javascript'> document.location='apply_package.php?package_id=$package_id'; </script>";
    }
    
}

if (isset($_POST['create_forum']))
{
    $user_id = $_SESSION['user_id'];
    $title = $_POST['forum_title'];
    $desc = $_POST['forum_desc'];

    $sql="INSERT INTO `forum` (`forum_user`, `forum_title`, `forum_desc`)
                        VALUES ('$user_id', '$title', '$desc')";
    $res = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

    if( $res )
    {
        echo "<script type='text/javascript'>alert('Forum Created Successfully');</script>";
        echo "<script type='text/javascript'> document.location='forum.php'; </script>";
    }
    else 
    {
        echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
        echo "<script type='text/javascript'> document.location='forum.php'; </script>";
    }
}

if(isset($_POST['pay_package']))
{
    // print_r($_FILES); die;
    $student_id = $_SESSION['student_id'];
    $payment_id = $_POST['payment_id'];

    $target_dir = "receipt/";
    $target_file = $target_dir . basename($_FILES["receipt"]["name"]);
    // $target_file = $target_dir . $payment_id;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $target_file = "{$target_dir}{$payment_id}.{$imageFileType}";
    $error_str = "";

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["receipt"]["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $error_str .= "File is not an image.\\n";
        $uploadOk = 0;
    }

    // Check if file already exists
    // if (file_exists($target_file)) {
    //     $error_str .= "File already exists.\\n";
    //     $uploadOk = 0;
    // }

    // Check file size
    if ($_FILES["receipt"]["size"] > 5000000) {
        $error_str .= "Your file is too large.\\n";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $error_str .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.\\n";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script type='text/javascript'>alert('Fail,Your file is not uploaded : \\n $error_str');</script>";
        returnPay($payment_id);
    // if everything is ok, try to upload file
    } 
    else {
        if (move_uploaded_file($_FILES["receipt"]["tmp_name"], $target_file)) {
            echo "<script type='text/javascript'>alert('The file ". basename( $_FILES["receipt"]["name"]). " has been uploaded.');</script>";
        } else {
            echo "<script type='text/javascript'>alert('Sorry, there was an error uploading your file. Please try again.');</script>";
            returnPay($payment_id);
        }
    }

    $receipt_name = "{$payment_id}.{$imageFileType}";
    $query_pay = "UPDATE `payment` SET `payment_status`='PENDING', `payment_receipt`='$receipt_name' WHERE `payment_id`='$payment_id'";
    $res_pay = mysqli_query($myConnection,$query_pay) or die(mysqli_error($myConnection));

    if( $res_pay )
    {
        echo "<script type='text/javascript'>alert('Receipt uploaded. Please wait for approval by the tuition');</script>";
        echo "<script type='text/javascript'> document.location='student_profile.php'; </script>";
    }
    else 
    {
        echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
        returnPay($payment_id);
    }
}

function returnPay($payment_id)
{
    echo "<script type='text/javascript'> document.location='pay_package.php?payment_id=$payment_id'; </script>";
}

if ( isset($_GET['approve_pay']) )
{
    $payment_id = $_GET['approve_pay'];
    $package_id = $_GET['PACKAGE_ID'];

    $query_pay = "UPDATE `payment` SET `payment_status`='PAID' WHERE `payment_id`='$payment_id'";
    $res_pay = mysqli_query($myConnection,$query_pay) or die(mysqli_error($myConnection));

    if( $res_pay )
    {
        echo "<script type='text/javascript'>alert('Payment Approved.');</script>";
        echo "<script type='text/javascript'> document.location='tuition_student_list.php?p_id=$package_id'; </script>";
    }
    else 
    {
        echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
        echo "<script type='text/javascript'> document.location='tuition_student_list.php?p_id=$package_id'; </script>";
    }
}

function save_img($user, $id)
{
    if ( empty(basename($_FILES["pro_pic"]["name"])) )
    {
        return 'user.png';
    }
    
    $target_dir = "profile_pic/";
    $target_file = $target_dir . basename($_FILES["pro_pic"]["name"]);
    // $target_file = $target_dir . $payment_id;
    $img_name = "$user-$id";
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $target_file = "{$target_dir}{$img_name}.{$imageFileType}";
    $error_str = "";
    $ret = "{$img_name}.{$imageFileType}";

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["pro_pic"]["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $error_str .= "File is not an image.\\n";
        $uploadOk = 0;
    }

    // Check if file already exists
    // if (file_exists($target_file)) {
    //     $error_str .= "File already exists.\\n";
    //     $uploadOk = 0;
    // }

    // Check file size
    if ($_FILES["pro_pic"]["size"] > 5000000) {
        $error_str .= "Your file is too large.\\n";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $error_str .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.\\n";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        // echo "<script type='text/javascript'>alert('Fail,Your file is not uploaded : \\n $error_str');</script>";
        return 'user.png';
    // if everything is ok, try to upload file
    } 
    else {
        if (move_uploaded_file($_FILES["pro_pic"]["tmp_name"], $target_file)) {
            // echo "<script type='text/javascript'>alert('The file ". basename( $_FILES["receipt"]["name"]). " has been uploaded.');</script>";
        } else {
            // echo "<script type='text/javascript'>alert('Sorry, there was an error uploading your file. Please try again.');</script>";
            return 'user.png';
        }
    }

   return $ret;
}

if (isset($_POST['comm']))
{
    $com_desc = $_POST['new_com'];
    $forum_id = $_POST['forum_id'];
    $user_id = $_SESSION['user_id'];


    $sql="INSERT INTO `comment` (`com_desc`, `com_forum_id`, `com_user`)
                        VALUES ('$com_desc', '$forum_id', '$user_id')";
    $res = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

    if( $res )
    {
        // echo "<script type='text/javascript'>alert('Forum Created Successfully');</script>";
        echo "<script type='text/javascript'> document.location='forum_detail.php?forum_id=$forum_id'; </script>";
    }
    else 
    {
        echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
        echo "<script type='text/javascript'> document.location='forum_detail.php?forum_id=$forum_id'; </script>";
    }
}
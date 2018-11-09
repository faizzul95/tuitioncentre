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
               echo "<script type='text/javascript'> document.location='student_profile-update.php?id=$id'; </script>";
            }
            else
            {
                echo "<script type='text/javascript'> document.location='parent_profile-update.php?id=$id'; </script>";
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
    $std_dob = $_POST['std_dob'];
    $date = mysqli_real_escape_string($myConnection, date('Y-m-d'));

    $sql_usr = "SELECT * FROM `student` WHERE `user_id`='$user_id'";
    $check_stud = mysqli_query($myConnection,$sql_usr) or die(mysqli_error($myConnection));
    
    if (mysqli_num_rows($check_stud)>0) 
    {
        echo "<script type='text/javascript'>alert('Fail. This student already exist in system.Please use other username');</script>";
        echo "<script type='text/javascript'> document.location='register.php'; </script>";
    }
    else
    {   

	    $query_std="INSERT INTO `student` (`student_name`, `student_ic`, `student_telno`,`student_dob`, `student_gender`, `student_email`,`student_last_update`, `user_id`)
	                    VALUES ('$student_name', '$student_ic', '$student_telno','$std_dob','$student_gender','$student_email','$date','$user_id')";
	    $res_std = mysqli_query($myConnection,$query_std) or die(mysqli_error($myConnection));

	    if($res_std)
	    {

            $last_id = mysqli_insert_id($myConnection);
            $_SESSION['student_id'] = $last_id;
	        echo "<script type='text/javascript'>alert('Successfully Registered.');</script>";
	        echo "<script type='text/javascript'> document.location='student_profile.php?id=$user_id'; </script>";
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
    $prt_name = $_POST['prt_name'];
    $prt_ic = $_POST['prt_ic'];
    $prt_telno = $_POST['prt_telno'];
    $prt_email = $_POST['prt_email'];
    $user_id = $_POST['user_id'];
    $prt_gender = $_POST['prt_gender'];
    $prt_dob = $_POST['prt_dob'];
    $date = mysqli_real_escape_string($myConnection, date('Y-m-d'));
     
    $query_prt="INSERT INTO `parent` (`parent_name`, `parent_ic`, `parent_telno`,`parent_dob`, `parent_gender`, `parent_email`,`parent_last_update`, `user_id`)
                    VALUES ('$prt_name', '$prt_ic', '$prt_telno','$prt_dob','$prt_gender','$prt_email','$date','$user_id')";
    $res_prt = mysqli_query($myConnection,$query_prt) or die(mysqli_error($myConnection));

    if($res_prt)
    {
        echo "<script type='text/javascript'>alert('Successfully Registered.');</script>";
        echo "<script type='text/javascript'> document.location='parent_profile.php'; </script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
        echo "<script type='text/javascript'> document.location='parent_profile-update.php?id=$user_id'; </script>";
    }
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
    $tuition_area = $_POST['tuition_area'];


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

        $query_tuition="INSERT INTO `tuition` (`tuition_name`, `tuition_telno`, `tuition_email`, `tuition_address`, `tuition_state`, `tuition_area`, `user_id`)
                    VALUES ('$tuition_name', '$tuition_telno', '$tuition_email', '$tuition_address', '$tuition_state', '$tuition_area', '$id')";
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
    // $package_description = $_POST['package_description'];

    // $sql = "SELECT * FROM `master_subject`";
    // $sql_subject = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

    // $subject = '';
    // while( $row = mysqli_fetch_array($sql_subject) )
    // {
    //     if( isset($_POST[$row['subject_id']]) )
    //     {
    //         $subject .= ",".$row['subject_name'];
    //         // $subject .= ",".$row['subject_id'];
    //     }
    // }
    // $subject = substr($subject, 1);

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

if(isset($_POST['update_package']))
{
    $user_id = $_SESSION['user_id'];
    $package_id = $_POST['package_id'];
    $package_name = $_POST['package_name'];
    $package_capacity = $_POST['package_capacity'];
    $package_price = $_POST['package_price'];
    $package_description = $_POST['package_description'];

    $sql = "SELECT * FROM `master_subject`";
    $sql_subject = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

    $subject = '';
    while( $row = mysqli_fetch_array($sql_subject) )
    {
        if( isset($_POST[$row['subject_id']]) )
        {
            $subject .= ",".$row['subject_name'];
            // $subject .= ",".$row['subject_id'];
        }
    }
    $subject = substr($subject, 1);

    $query_package = "UPDATE `tuition_package` SET `package_name`='$package_name', `package_capacity`='$package_capacity', `package_price`='$package_price', `package_description`='$package_description', `package_subject`='$subject' WHERE `package_id`='$package_id'";
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


// die;
// //uncheck--- check code n change to mysqli
// function begin(){
//     mysql_query("BEGIN");
// }

// function commit(){
//     mysql_query("COMMIT");
// }

// function rollback(){
//     mysql_query("ROLLBACK");
// }



        //deprecated
// if (isset($_POST['register_tuition'])) 
// {
//     $username = $_POST['username'];

//     $sql_username = "SELECT * FROM user WHERE username='$username' ";
//     $res_username = mysql_query($sql_username) or die(mysql_error());
//     if (mysql_num_rows($res_username)==1) 
//     {
//         echo "<script type='text/javascript'>alert('Fail. This username already exist in system.Please use other username');</script>";
//         echo "<script type='text/javascript'> document.location='register.php'; </script>";
//     }

//     $password1 = $_POST['password'];
//     $password = htmlspecialchars($password1, ENT_QUOTES);

//     $name1 = $_POST['name'];
//     $name = htmlspecialchars($name1, ENT_QUOTES);

//     $phone_number = $_POST['phone_number'];

//     $tuition_centre_name1 = $_POST['tuition_centre_name'];
//     $tuition_centre_name = htmlspecialchars($tuition_centre_name1, ENT_QUOTES);

//     $state = $_POST['state'];

//     $area1 = $_POST['area'];
//     $area = htmlspecialchars($area1, ENT_QUOTES);

//     $level='2' ;
//     $user_type='user' ;
//     $status='1' ;

//     date_default_timezone_set("Asia/Kuala_Lumpur");
//     $created_date = date('Y-m-d H:i:s');

//     function randomRefferalCode() 
//     {
//         $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
//         $pass = array(); //remember to declare $pass as an array
//         $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
//         for ($i = 0; $i < 8; $i++) 
//         {
//             $n = rand(0, $alphaLength);
//             $pass[] = $alphabet[$n];
//         }
//         return implode($pass); //turn the array into a string
//     }

//     $refer_code_user =  randomRefferalCode();

//     function randomRefferalCode1() 
//     {
//         $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
//         $pass = array(); //remember to declare $pass as an array
//         $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
//         for ($i = 0; $i < 8; $i++) 
//         {
//             $n = rand(0, $alphaLength);
//             $pass[] = $alphabet[$n];
//         }
//         return implode($pass); //turn the array into a string
//     }

//     $refer_code_tuition =  randomRefferalCode1();

//     begin();

//     $query_user=" INSERT INTO user( level, refer_code, username, user_type, password, name, phone_number, status, created_date )
//                   VALUES ('$level', '$refer_code_user', '$username', '$user_type', '$password', '$name', '$phone_number','$status','$created_date')";
//     $res_user = mysql_query($query_user);

//     $sql= "SELECT  id FROM user Where refer_code='$refer_code_user' LIMIT 1";
//     $res = mysql_query($sql) or die(mysql_error());
//     $row = mysql_fetch_assoc($res);
//     $id = $row['id'];
//     $customer_id = $id ;
//     $created_by = $id ;

//     $UpdateQuery1 = "UPDATE user SET created_by ='$created_by' WHERE id ='$created_by'"; 
//     $resUpdate = mysql_query($UpdateQuery1);    

//     $query_tuition=" INSERT INTO tuition_list (introducer_refer_code,tuition_refer_code,tuition_centre_name,area,state,status,created_date,created_by)
//                     VALUES ('$refer_code_user','$refer_code_tuition','$tuition_centre_name','$area','$state','$status','$created_date','$created_by')";
//     $res_tuition = mysql_query($query_tuition);

//     if($res_user && $UpdateQuery1 && $res_tuition )
//     {
//         commit(); 
//         echo "<script type='text/javascript'>alert('Successfully Registered.Please Login');</script>";
//         echo "<script type='text/javascript'> document.location='login.php'; </script>";
//     }
//     else 
//     {
//         rollback();
//         echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
//         echo "<script type='text/javascript'> document.location='register.php'; </script>";
//     }
// }


//sini lu
if (isset($_POST['apply_package'])) {

$ic_no = $_POST['ic_no'];
// $package_refer_code = $_POST['package_refer_code'];

$sql = "SELECT * FROM tuition_package WHERE package_refer_code='$package_refer_code' ";
$res = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_assoc($res);

$package_student_no = $row['package_student_no'];
$package_max_no = $row['package_max_no'];

$new_student_no = $package_student_no + 1 ;

if ( $new_student_no > $package_max_no)
{
echo "<script type='text/javascript'>alert('Sorry, This class already full');</script>";
echo "<script type='text/javascript'> document.location='../../../Website/index.php'; </script>";
}
else
{}

$status='1' ;

date_default_timezone_set("Asia/Kuala_Lumpur");
$created_date = date('Y-m-d H:i:s');

begin();

$query_user=" INSERT INTO list_package_student
(
package_refer_code,
student_ic,
status,
created_date
)
VALUES
(
'$package_refer_code',
'$ic_no',
'$status',
'$created_date'
)";
$res_user = mysql_query($query_user);


$UpdateQuery= "UPDATE tuition_package SET  
package_student_no='$new_student_no'
WHERE package_refer_code='$package_refer_code' ";               
$result=mysql_query($UpdateQuery);


if($res_user && $result )
{
commit(); 

//unset($_SESSION["fullname_sign"]);

echo "<script type='text/javascript'>alert('Successfully Apply Package');</script>";
echo "<script type='text/javascript'> document.location='../../../Website/index.php'; </script>";

}
else {
rollback();
echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
echo "<script type='text/javascript'> document.location='../../../Website/index.php'; </script>";
}

}

?>



<?php 
if(isset($_POST['update_personal_detail'])){

$user_id = $_POST['user_id'] ;

$name1 = $_POST['name'];
$name = htmlspecialchars($name1, ENT_QUOTES);

$phone_number = $_POST['phone_number'] ;

$password1 = $_POST['password'];
$password = htmlspecialchars($password1, ENT_QUOTES);


date_default_timezone_set("Asia/Kuala_Lumpur");
$updated_date = date('Y-m-d H:i:s');


$UpdateQuery= "UPDATE user SET  
name='$name',
phone_number='$phone_number',
password='$password',
updated_date='$updated_date',
updated_by='$user_id'
WHERE id='$user_id' ";               
mysql_query($UpdateQuery);
$result=mysql_query($UpdateQuery);

if($result)
{
echo "<script type='text/javascript'>alert('Successfully updated your personal details');</script>";
echo "<script type='text/javascript'> document.location='../User/settings.php'; </script>";?>
<?php
}

else 
{
echo "<script type='text/javascript'>alert('Fail. Please try again');</script>";
echo "<script type='text/javascript'> document.location='../User/settings.php'; </script>";
}

}
?>




<?php 
if(isset($_POST['update_personal_detail_student'])){

$user_id = $_POST['user_id'] ;

$name1 = $_POST['name'];
$name = htmlspecialchars($name1, ENT_QUOTES);

$phone_number = $_POST['phone_number'] ;

$password1 = $_POST['password'];
$password = htmlspecialchars($password1, ENT_QUOTES);

$address1 = $_POST['address'];
$address = htmlspecialchars($address1, ENT_QUOTES);

date_default_timezone_set("Asia/Kuala_Lumpur");
$updated_date = date('Y-m-d H:i:s');


$UpdateQuery= "UPDATE user SET  
name='$name',
phone_number='$phone_number',
password='$password',
address ='$address',
updated_date='$updated_date',
updated_by='$user_id'
WHERE id='$user_id' ";               
mysql_query($UpdateQuery);
$result=mysql_query($UpdateQuery);

if($result)
{
echo "<script type='text/javascript'>alert('Successfully updated your personal details');</script>";
echo "<script type='text/javascript'> document.location='../Student/settings.php'; </script>";?>
<?php
}

else 
{
echo "<script type='text/javascript'>alert('Fail. Please try again');</script>";
echo "<script type='text/javascript'> document.location='../Student/settings.php'; </script>";
}

}
?>




<?php 
if(isset($_POST['update_tuition_detail'])){

$tuition_id = $_POST['tuition_id'] ;
$user_id = $_POST['user_id'] ;

$tuition_centre_name1 = $_POST['tuition_centre_name'];
$tuition_centre_name = htmlspecialchars($tuition_centre_name1, ENT_QUOTES);

$tuition_email = $_POST['tuition_email'] ;
$tuition_phone = $_POST['tuition_phone'] ;

$address1 = $_POST['address'];
$address = htmlspecialchars($address1, ENT_QUOTES);

$available_subjects1 = $_POST['available_subjects'];
$available_subjects = htmlspecialchars($available_subjects1, ENT_QUOTES);

$area = $_POST['area'] ;


date_default_timezone_set("Asia/Kuala_Lumpur");
$updated_date = date('Y-m-d H:i:s');


$UpdateQuery= "UPDATE tuition_list SET  
tuition_centre_name='$tuition_centre_name',
tuition_phone='$tuition_phone',
address='$address',
area='$area',
available_subjects='$available_subjects',
updated_date='$updated_date',
updated_by='$user_id'
WHERE id='$tuition_id' ";               
mysql_query($UpdateQuery);
$result=mysql_query($UpdateQuery);

if($result)
{
echo "<script type='text/javascript'>alert('Successfully updated your tuition centre details');</script>";
echo "<script type='text/javascript'> document.location='../User/settings.php'; </script>";?>
<?php
}

else 
{
echo "<script type='text/javascript'>alert('Fail. Please try again');</script>";
echo "<script type='text/javascript'> document.location='../User/settings.php'; </script>";
}

}
?>





<?php
error_reporting(0); 


if (isset($_POST['register_packages'])) {


$package_name1 = $_POST['package_name'];
$package_name = htmlspecialchars($package_name1, ENT_QUOTES);

$package_detail1 = $_POST['package_detail'];
$package_detail = htmlspecialchars($package_detail1, ENT_QUOTES);

$package_price = $_POST['package_price'];
$package_max_no = $_POST['package_max_no'];

$tuition_refer_code = $_POST['tuition_refer_code'];

$status='1' ;

date_default_timezone_set("Asia/Kuala_Lumpur");
$created_date = date('Y-m-d H:i:s');

function randomRefferalCode() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

$package_refer_code =  randomRefferalCode();


begin();


$query_user=" INSERT INTO tuition_package
(
tuition_refer_code,
package_refer_code,
package_name,
package_detail,
package_price,
package_max_no,
status,
created_date
)
VALUES
(
'$tuition_refer_code',
'$package_refer_code',
'$package_name',
'$package_detail',
'$package_price',
'$package_max_no',
'$status',
'$created_date'
)";
$res_package = mysql_query($query_user);

$sql= "SELECT  id FROM user Where refer_code='$refer_code_user' LIMIT 1";
$res = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_assoc($res);
$id = $row['id'];
$customer_id = $id ;
$created_by = $id ;

$UpdateQuery1 = "UPDATE tuition_package SET   
created_by ='$created_by' 
WHERE package_refer_code ='$package_refer_code'"; 
$resUpdatePackage = mysql_query($UpdateQuery1);	




if($res_package && $resUpdatePackage )
{
commit(); 


echo "<script type='text/javascript'>alert('Successfully Registered New Package');</script>";
echo "<script type='text/javascript'> document.location='../User/add_packages.php'; </script>";

}
else {
rollback();
echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
echo "<script type='text/javascript'> document.location='../User/add_packages.php'; </script>";
}

}

?>




<?php 
if(isset($_POST['update_tuition_package'])){

$package_id = $_POST['package_id'];

$package_name1 = $_POST['package_name'];
$package_name = htmlspecialchars($package_name1, ENT_QUOTES);

$package_detail1 = $_POST['package_detail'];
$package_detail = htmlspecialchars($package_detail1, ENT_QUOTES);

$package_price = $_POST['package_price'];
$package_max_no = $_POST['package_max_no'];

$area = $_POST['area'] ;

date_default_timezone_set("Asia/Kuala_Lumpur");
$updated_date = date('Y-m-d H:i:s');


$UpdateQuery= "UPDATE tuition_package SET  
package_name='$package_name',
package_detail='$package_detail',
package_price='$package_price',
package_max_no='$package_max_no'
WHERE id='$package_id' ";               
mysql_query($UpdateQuery);
$result=mysql_query($UpdateQuery);

if($result)
{
echo "<script type='text/javascript'>alert('Successfully updated your package details');</script>";
echo "<script type='text/javascript'> document.location='../User/list_of_package_1.php'; </script>";?>
<?php
}

else 
{
echo "<script type='text/javascript'>alert('Fail. Please try again');</script>";
echo "<script type='text/javascript'> document.location='../User/list_of_package_1.php'; </script>";
}

}
?>



<?php
function number_of_purchase_orders() {


$data = mysql_query("select COUNT(id) As num 
                     from orders 
					 where order_type='1' ");

$row = mysql_fetch_assoc($data);
$numuser = $row['num'];

echo $numuser;

}
?>














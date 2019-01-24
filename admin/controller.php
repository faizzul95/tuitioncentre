<?php
include_once("../connection.php");
session_start();

// set default timezone to Malaysia
date_default_timezone_set("Asia/Kuala_Lumpur");


// delete parent
if(isset($_GET['prtDel']))
{
	$parent_id = $_GET['prtDel'];

	$sql_del = "DELETE FROM `parent` WHERE `parent_id` = '$parent_id'";
	$res = mysqli_query($myConnection, $sql_del) or die (mysqli_error($myConnection));

	if($res)
	{
		echo "<script type='text/javascript'>alert('Deleted');</script>";
        echo "<script type='text/javascript'> document.location='parent_list.php?delete=success'; </script>";
	}
	else
	{
		 echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
        echo "<script type='text/javascript'> document.location='parent_list.php?delete=fail'; </script>";
	}
}



// delete student
if(isset($_GET['stdDel']))
{
	$student_id = $_GET['stdDel'];

	$sql_del = "DELETE FROM `student` WHERE `student_id` = '$student_id'";
	$res = mysqli_query($myConnection, $sql_del) or die (mysqli_error($myConnection));

	if($res)
	{
		echo "<script type='text/javascript'>alert('Deleted');</script>";
        echo "<script type='text/javascript'> document.location='student_list.php?delete=success'; </script>";
	}
	else
	{
		 echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
        echo "<script type='text/javascript'> document.location='student_list.php?delete=fail'; </script>";
	}
}


// delete tuition
if(isset($_GET['userDel']))
{
	$tuition_id = $_GET['userDel'];

	$sql_del = "DELETE FROM `tuition` WHERE `tuition_id` = '$tuition_id'";
	$res = mysqli_query($myConnection, $sql_del) or die (mysqli_error($myConnection));

	if($res)
	{
		echo "<script type='text/javascript'>alert('Deleted');</script>";
        echo "<script type='text/javascript'> document.location='tuition_list.php?delete=success'; </script>";
	}
	else
	{
		 echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
        echo "<script type='text/javascript'> document.location='tuition_list.php?delete=fail'; </script>";
	}
}

// delete feedback
if(isset($_GET['fedDel']))
{
	$feed_id = $_GET['fedDel'];

	$sql_del = "DELETE FROM `feedback` WHERE `feedback_id` = '$feed_id'";
	$res = mysqli_query($myConnection, $sql_del) or die (mysqli_error($myConnection));

	if($res)
	{
		echo "<script type='text/javascript'>alert('Deleted');</script>";
        echo "<script type='text/javascript'> window.location.href = window.history.back(); </script>";
	}
	else
	{
		 echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
         echo "<script type='text/javascript'> window.location.href = window.history.back(); </script>";
	}
}

// update status feedback
if(isset($_GET['fedRead']))
{
	$feed_id = $_GET['fedRead'];
    $sql= "UPDATE `feedback` SET feedback_status = 'Read' WHERE `feedback_id` = '$feed_id'";
    $result = mysqli_query($myConnection, $sql) or die (mysqli_error($myConnection));
	if($sql)
	{
		// echo "<script type='text/javascript'>alert('Updated');</script>";
        echo "<script type='text/javascript'> window.location.href = window.history.back(); </script>";
	}
	else
	{
		 echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
         echo "<script type='text/javascript'> window.location.href = window.history.back(); </script>";
	}
}



// mail function (reply feedback)
if(isset($_POST['reply']))
{
	$feed_id = $_POST['feed_id'];
	$msg = $_POST['reply_message'];
	$email = $_POST['feedback_email'];

	$title = 'Reply Feedback';
    $headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// update status
	$sql= "UPDATE `feedback` SET feedback_status = 'Read & Reply' WHERE `feedback_id` = '$feed_id'";
    $result = mysqli_query($myConnection, $sql) or die (mysqli_error($myConnection));

	// Additional headers
	$headers .= 'From: Tuition Centre <tuitioncentre@gmail.com>' . "\r\n";

    if(mail($email,$title,$msg,$headers))
    {
        echo "<script type='text/javascript'>alert('Email sent sucessfully.');</script>";
        echo "<script type='text/javascript'> window.location.href = window.history.back(); </script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('Email sending fail. Please try again.');</script>";
        echo "<script type='text/javascript'> window.location.href = window.history.back(); </script>";
    }
}



?>
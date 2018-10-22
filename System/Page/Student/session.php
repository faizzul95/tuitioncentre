<?php
error_reporting(0);
session_start();

$user_id=$_SESSION['id'];
$email=$_SESSION['email'];
$fullname=$_SESSION['fullname'];
$referral_code=$_SESSION['referral_code'];
$level=$_SESSION['level'];
?>


<?php if (!isset($_SESSION['id'])) 
{
echo "<script type='text/javascript'>alert('Wrong Username /Password / Recaptcha Or Your ID Not Activated Yet,Please Try Again');</script>";
echo "<script type='text/javascript'> document.location='../../../Website/index.php'; </script>";
} 
?>
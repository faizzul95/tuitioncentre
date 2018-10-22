<?php error_reporting(0);
include_once("Connect.php");
?>

<?php /*?>$originalDate = $_POST['Tarikh_daftar'];
$Tarikh_daftar = date("Y-m-d", strtotime($originalDate));<?php */?>

<?php
function begin(){
    mysql_query("BEGIN");
}

function commit(){
    mysql_query("COMMIT");
}

function rollback(){
    mysql_query("ROLLBACK");
}


?>




<?php

session_start();
if (isset($_POST['signin'])) {
	
	
$username1 = $_POST['username'];
$username = htmlspecialchars($username1, ENT_QUOTES);

$password1 = $_POST['password'];
$password = htmlspecialchars($password1, ENT_QUOTES);
	
	
$sql = "SELECT * FROM user 
WHERE username='$username' 
AND password='$password' 
AND status='1' LIMIT 1";
$res = mysql_query($sql) or die(mysql_error());

if (mysql_num_rows($res)==1) 
{
$row = mysql_fetch_assoc($res);

$_SESSION['id'] = $row['id'];
$_SESSION['username'] = $row['username'];
$_SESSION['name'] = $row['name'];
$_SESSION['refer_code'] = $row['refer_code'];
$_SESSION['level'] = $row['level'];

if ($_SESSION['level']=='1' )

{
echo "<script type='text/javascript'> document.location='../Admin/dashboard.php'; </script>";
exit();
}

else	
if ($_SESSION['level']=='2' )
{
echo "<script type='text/javascript'> document.location='../User/settings.php'; </script>";
exit();
}

else	
if ($_SESSION['level']=='3' )
{
echo "<script type='text/javascript'> document.location='../Student/settings.php'; </script>";
exit();
}

}
else 
{
echo "<script type='text/javascript'>alert('Wrong Username or Password,Please Try Again');</script>";
echo "<script type='text/javascript'> document.location='../../../Website/dashboard.php'; </script>";
}
}

?>






<?php
error_reporting(0); 
session_start();

if (isset($_POST['register_tuition'])) {

$username = $_POST['username'];

$sql_username = "SELECT * FROM user WHERE username='$username' ";
$res_username = mysql_query($sql_username) or die(mysql_error());
if (mysql_num_rows($res_username)==1) 
{
echo "<script type='text/javascript'>alert('Fail. This username already exist in system.Please use other username');</script>";
echo "<script type='text/javascript'> document.location='../../../Website/register.php'; </script>";
}
else
{

}

$password1 = $_POST['password'];
$password = htmlspecialchars($password1, ENT_QUOTES);

$name1 = $_POST['name'];
$name = htmlspecialchars($name1, ENT_QUOTES);

$phone_number = $_POST['phone_number'];

$tuition_centre_name1 = $_POST['tuition_centre_name'];
$tuition_centre_name = htmlspecialchars($tuition_centre_name1, ENT_QUOTES);

$state = $_POST['state'];

$area1 = $_POST['area'];
$area = htmlspecialchars($area1, ENT_QUOTES);

$level='2' ;
$user_type='user' ;
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

$refer_code_user =  randomRefferalCode();



function randomRefferalCode1() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

$refer_code_tuition =  randomRefferalCode1();

begin();


$query_user=" INSERT INTO user
(
level,
refer_code,
username,
user_type,
password,
name,
phone_number,
status,
created_date
)
VALUES
(
'$level',
'$refer_code_user',
'$username',
'$user_type',
'$password',
'$name',
'$phone_number',
'$status',
'$created_date'
)";
$res_user = mysql_query($query_user);

$sql= "SELECT  id FROM user Where refer_code='$refer_code_user' LIMIT 1";
$res = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_assoc($res);
$id = $row['id'];
$customer_id = $id ;
$created_by = $id ;

$UpdateQuery1 = "UPDATE user SET   
created_by ='$created_by' 
WHERE id ='$created_by'"; 
$resUpdate = mysql_query($UpdateQuery1);	


$query_tuition=" INSERT INTO tuition_list
(
introducer_refer_code,
tuition_refer_code,
tuition_centre_name,
area,
state,
status,
created_date,
created_by
)
VALUES
(
'$refer_code_user',
'$refer_code_tuition',
'$tuition_centre_name',
'$area',
'$state',
'$status',
'$created_date',
'$created_by'
)";
$res_tuition = mysql_query($query_tuition);



if($res_user && $UpdateQuery1 && $res_tuition )
{
commit(); 

//unset($_SESSION["fullname_sign"]);

echo "<script type='text/javascript'>alert('Successfully Registered.Please Login');</script>";
echo "<script type='text/javascript'> document.location='../../../Website/login.php'; </script>";

}
else {
rollback();
echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
echo "<script type='text/javascript'> document.location='../../../Website/register_owner.php'; </script>";
}

}

?>




<?php
error_reporting(0); 
session_start();

if (isset($_POST['register_student'])) {

$ic_no = $_POST['ic_no'];

$sql_ic = "SELECT * FROM user WHERE ic_no='$ic_no' ";
$res_ic = mysql_query($sql_ic) or die(mysql_error());
if (mysql_num_rows($res_ic)==1) 
{
echo "<script type='text/javascript'>alert('Fail. This user already exist in system.Please use other IC');</script>";
echo "<script type='text/javascript'> document.location='../../../Website/register_student.php'; </script>";
}
else
{

}

$username1 = $_POST['username'];
$username = htmlspecialchars($username1, ENT_QUOTES);

$password1 = $_POST['password'];
$password = htmlspecialchars($password1, ENT_QUOTES);

$name1 = $_POST['name'];
$name = htmlspecialchars($name1, ENT_QUOTES);

$phone_number = $_POST['phone_number'];

$level='3' ;
$user_type='user' ;
$status='1' ;

date_default_timezone_set("Asia/Kuala_Lumpur");
$created_date = date('Y-m-d H:i:s');

begin();

$query_user=" INSERT INTO user
(
level,
ic_no,
username,
user_type,
password,
name,
phone_number,
status,
created_date
)
VALUES
(
'$level',
'$ic_no',
'$username',
'$user_type',
'$password',
'$name',
'$phone_number',
'$status',
'$created_date'
)";
$res_user = mysql_query($query_user);


if($res_user )
{
commit(); 

//unset($_SESSION["fullname_sign"]);

echo "<script type='text/javascript'>alert('Successfully Registered.Please Login');</script>";
echo "<script type='text/javascript'> document.location='../../../Website/login.php'; </script>";

}
else {
rollback();
echo "<script type='text/javascript'>alert('Fail, Please Try Again');</script>";
echo "<script type='text/javascript'> document.location='../../../Website/register_student.php'; </script>";
}

}

?>






<?php
error_reporting(0); 
session_start();

if (isset($_POST['apply_package'])) {

$ic_no = $_POST['ic_no'];
$package_refer_code = $_POST['package_refer_code'];

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
session_start();

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














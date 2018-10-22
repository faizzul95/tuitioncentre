<?php



if($level == '1')//Admin
{
include_once("left_menu_admin.php");
}

else
if($level == '2')//Tuition Owner
{
include_once("left_menu_tuition_owner.php");
}


else
if($level == '3')//Student
{
include_once("left_menu_student.php");
}

?>

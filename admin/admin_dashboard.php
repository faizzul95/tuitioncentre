<?php
	include_once("../connection.php");

	$sql = "select upper(user_type),count(*) as tot_user from user where user_type in ('tuition','parent','student') group by user_type";
    $sql_usr = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
    $row = mysqli_fetch_all($sql_usr);
	
	// echo "total user : ".$row['tot_user']."<br>";
	// print_r($row);
	echo $row[0][0]." : ".$row[0][1]."<br>";
	echo $row[1][0]." : ".$row[1][1]."<br>";
	echo $row[2][0]." : ".$row[2][1]."<br>";
	// echo $row[3][0]." : ".$row[3][1]."<br>";
	// print_r($row);
	// echo "test";
?>
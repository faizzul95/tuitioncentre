<?php		
	include_once("connection.php");
	session_start();
	$user_id = $_SESSION['user_id'];
// $user_id =  17;
	$sql = "SELECT * FROM student WHERE user_id = $user_id";
    $sql_std = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

	echo "<table border='1'>"; 
	echo "<tr>
			<td>Student ID</td>
			<td>Student Name</td>
			<td>Student IC</td>
			<td>Student Tel No</td>
			<td>Student Email</td>
			<td>Action</td>
		</tr>";
    while( $row = mysqli_fetch_array($sql_std) )
    {
    	 echo "<tr>
    			<td> ".$row['student_id']." </td>
    			<td> ".$row['student_name']. "</td>
    			<td> ".$row['student_ic']. "</td>
    			<td> ".$row['student_telno']. "</td>
    			<td> ".$row['student_email']." </td>
    			<td><input type='button' value='use'/></td>
			</tr>";
    }
    echo "</table>";

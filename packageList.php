<?php		
	include_once("connection.php");
	session_start();
	$user_id = $_SESSION['user_id'];
	$tuition_id = $_SESSION['tuition_id'];

	$sql = "SELECT * FROM `tuition_package` WHERE `tuition_id` = '$tuition_id'";
    $sql_tuition = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

    echo "<a href='register_package.php'>Add Package</a> <br><br>";

	echo "<table border='1'>"; 
	echo "<tr>
			<td>Package ID</td>
			<td>Package Name</td>
			<td>Package Capacity</td>
			<td>Package Price
			<td>Action</td>
		</tr>";
    while( $row = mysqli_fetch_array($sql_tuition) )
    {
    	 echo "<tr>
    			<td> ".$row['package_id']." </td>
    			<td> ".$row['package_name']. "</td>
    			<td> ".$row['package_capacity']. "</td>
    			<td> ".$row['package_price']. "</td>
    			<td><input type='button' value='use'/></td>
			</tr>";
    }
    echo "</table>";

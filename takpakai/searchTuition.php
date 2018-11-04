<?php		
	include_once("connection.php");
	session_start();
	$user_id = $_SESSION['user_id'];

	if( isset($_POST['view_tuition_center']))
	{
		$area = $_POST['area'];
		$avg_rating = $_POST['avg_rating'];
		$available_subjects = $_POST['available_subjects'];

		$sql = "SELECT * FROM `tuition` a INNER JOIN `tuition_package` b ON a.`tuition_id` = b.`tuition_id` WHERE `tuition_area` = '$area'";
    	$sql_tuition = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));

    	echo "<table border='1'>"; 
		echo "<tr>
				<td>Tuition ID</td>
				<td>Tuition Area</td>
				<td>Package ID</td>
				<td>Package Name</td>
				<td>Package Capacity</td>
				<td>Package Price</td>
				<td>Package Subject</td>
				<td>Action</td>
			</tr>";
	    while( $row = mysqli_fetch_array($sql_tuition) )
	    {
	    	 echo "<tr>
	    	 		<td> ".$row['tuition_id']." </td>
	    	 		<td> ".$row['tuition_area']." </td>
	    			<td> ".$row['package_id']." </td>
	    			<td> ".$row['package_name']. "</td>
	    			<td> ".$row['package_capacity']. "</td>
	    			<td> ".$row['package_price']. "</td>
	    			<td> ".$row['package_subject']." </td>
	    			<td><input type='button' value='use'/></td>
				</tr>";
	    }
	    echo "</table>";
	}
	


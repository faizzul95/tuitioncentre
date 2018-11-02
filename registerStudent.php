<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Tuition Center || Sign-Up Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='register/text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="register/css/style.css">  
</head>

<body>
	<?php
		$id = $_GET['id'];
	?>
	<form action="controller.php" method="post">
		<label>Student Name : </label>
		<input type="text" name="std_name">
		<label>Student Ic : </label>
		<input type="text" name="std_ic">
		<label>Student Tel No : </label>
		<input type="text" name="std_telno">
		<label>Student Email : </label>
		<input type="text" name="std_email">
		<input type="hidden" name="user_id" value="<?php echo $id; ?>">

		<input type="submit" name="reg_std_info">
	</form>
</body>	
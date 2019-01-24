
<?php
   session_start(); 
?>

<?php
    include_once("../connection.php");
    $id = $_GET['id'];

    $sql = mysqli_query($myConnection,"SELECT * FROM `feedback` WHERE feedback_id = '$id' ") or die (mysqli_error());
    $row=mysqli_fetch_array($sql);

    $query = $myConnection->query("SELECT * FROM `feedback` WHERE feedback_id = '$id'") or die (mysqli_error($myConnection));
   $row = $query->fetch_assoc();
   $feedback_id = $row['feedback_id'];
   $name = $row['feedback_name'];
   $email = $row['feedback_email'];
   $msg = $row['feedback_message'];
   $subject = $row['feedback_subject']

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <form method="post" action="controller.php?fedRead=<?php echo $id; ?>" role="form">
  <div class="modal-body">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td colspan="2">
            <center><h4>From : <b><font color="#0099ff"><?php echo $name; ?></font></b></h4></center>
            <center><h4>Email : <b><font color="#0099ff"><?php echo $email; ?></font></b></h4></center>
            <center><h4>Subject : <b><font color="#0099ff"><?php echo $subject; ?></font></b></h4></center>
            <br>
          </td>
        </tr>
        <tr>
          <td>Message</td>
          <td><textarea class="form-control" cols="8" rows="12" readonly><?php echo $msg; ?></textarea> </td>
        </tr>             
       </tbody>
    </table>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="fedRead" value="Mark as Read" />
    </div>
  </form>
</body>
</html>

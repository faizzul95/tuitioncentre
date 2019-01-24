<?php
   session_start(); 
?>

<?php
    include_once("../connection.php");
    $id = $_GET['id'];

    $sql = mysqli_query($myConnection,"SELECT * FROM `feedback` WHERE feedback_id = '$id' ") or die (mysqli_error());
    $row=mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <form method="post" action="controller.php?feedback_id=<?php echo $id; ?>" role="form">
  <div class="modal-body">
    <input type="hidden" name="feedback_id" value="<?php echo $id; ?>" />
    <input type="hidden" name="feedback_name" value="<?php echo $row['feedback_name'];?>">
    <input type="hidden" name="feedback_email" value="<?php echo $row['feedback_email'];?>">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <td>To</td>
          <td><b><i><?php echo $row['feedback_name'];?></i></b></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><b><i><?php echo $row['feedback_email'];?></i></b></td>
        </tr>
        <tr>
          <td>Message</td>
          <td><textarea rows="5" name="reply_message" class="form-control"></textarea></td>
        </tr>             
       </tbody>
    </table>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="reply" value="Reply" />
    </div>
  </form>
</body>
</html>

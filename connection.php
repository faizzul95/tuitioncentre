<?php


// $myConnection = new mysqli("localhost","root","","tuition_community_portal");

// // Check connection
// if (mysqli_connect_errno()) {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }

// $host = "localhost";
// $username = "root"; 
// $password = ""; 
// $db = "tuition_community_portal"; 

// $ok = mysql_connect($host, $username, $password) or die(mysql_error());
// mysql_select_db($db) or die(mysql_error());

$myConnection = new mysqli("localhost","root","","tuition_community");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>

<?php

$host = "localhost";
$username = "root"; 
$password = ""; 
$db = "tuition_community_portal"; 

@mysql_connect($host, $username, $password) or die(mysql_error());
mysql_select_db($db) or die(mysql_error());

?>




<?php /*?>
<?php

$host = "localhost";
$username = "rmmj"; 
$password = "123###"; 
$db = "rmmj"; 

@mysql_connect($host, $username, $password) or die(mysql_error());

mysql_select_db($db) or die(mysql_error());

?>
<?php */?>
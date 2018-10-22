
<?php

			session_start();
			session_unset();
			$_SESSION = array();
			session_destroy();
			session_write_close();

		echo ("<SCRIPT LANGUAGE='JavaScript'>
		window.location = 'index.php?result=logout';
        </SCRIPT>");
        	exit();

 ?>
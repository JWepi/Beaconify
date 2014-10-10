
<?php
	$STATICPASS = 'blpadm42';

	$bdd = mysql_connect("localhost", "jwpro158_blpadm", "blpadm42") or die("Impossible to connect to database: " . mysql_error());
	mysql_select_db("jwpro158_bleeep") or die('Impossible to select database: ' . mysql_error());
	
?>
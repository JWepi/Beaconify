
<?php

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if ($login = GetVal($_POST["login"]))
	{	
		$sql = "DELETE FROM User WHERE login = '".$login."'";
				
		if ($result = mysql_query($sql))
		{
			$ret = "success";
		}
		else
		{
			$ret = "error;generic";
		}
	}
	else
	{
		$ret = "error;missing_param";
	}

	echo($ret);
	
?>
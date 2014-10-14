
<?php

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if ($mail = GetVal($_POST["mail"]) &&
		$login = GetVal($_POST["login"]) &&
		$password = GetVal($_POST["password"]))
	{		
		if (CheckEmail($mail))
		{
			if (CheckLogin($login))
			{
				$sql = "INSERT INTO User VALUES('','".$mail."','".$login."','".$password."',0,0)";
				
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
				$ret = "error;login_exists";
			}
		}
		else
		{
			$ret = "error;mail_exists";
		}
	}
	else
	{
		$ret = "error;missing_param";
	}

	echo($ret);
?>
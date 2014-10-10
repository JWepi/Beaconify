
<?php

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if (isset($_POST["mail"]) &&
		isset($_POST["login"]) &&
		isset($_POST["password"]))
	{
		$password = $_POST["password"];
		
		if ($mail = CheckEmail($_POST["mail"]))
		{
			if ($login = CheckLogin($_POST["login"]))
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

<?php

/*

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if (isset($_POST["val"]))
	{
		$val = $_POST["val"];
	}
	else
	{
		$ret = "error;missing_param";
	}

	echo($ret);
	
*/
?>
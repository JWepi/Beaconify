
<?php

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if ($login = GetVal($_POST["login"]))
	{
		$email = GetVal($_POST["email"]);
		$password = GetVal($_POST["password"]);
		$level = GetVal($_POST["level"]);
		$news = GetVal($_POST["news"]);
	
		$hascondition = "";
	
		$sql = "UPDATE User SET ";
		
		if ($email)
		{
			$sql .= $hascondition . "mail = '".$email."' ";
			$hascondition = ",";
		}
		if ($password)
		{
			$sql .= $hascondition . "password = '".$password."' ";
			$hascondition = ",";
		}
		if ($level)
		{
			$sql .= $hascondition . "level = ".$level." ";
			$hascondition = ",";
		}
		if ($news)
		{
			$sql .= $hascondition . "news = ".$news." ";
			$hascondition = ",";
		}
		
		$sql .= " WHERE login = '".$login."'";
				
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
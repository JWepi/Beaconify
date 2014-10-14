
<?php

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if ($id_user = GetVal($_POST["id_user"]) &&
		$id_beacon = GetVal($_POST["id_beacon"]) &&
		$id_content = GetVal($_POST["id_content"]) &&
		$id_context = GetVal($_POST["id_context"]) &&
		$name = GetVal($_POST["name"]))
	{
		$sql = "INSERT INTO Push VALUES(".$id_user.",".$id_beacon.",".$id_content.",
		".$id_context.",'".$name."')";
		
		if ($result = mysql_query($sql))
		{
			$ret = "success";
		}
		else
		{
			mysql_query($deletequery);
			$ret = "error;generic";
		}
	}
	else
	{
		$ret = "error;missing_param";
	}

	echo($ret);
?>

<?php

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if ($id_user = GetVal($_POST["id_user"]) &&
		$id_beacon = GetVal($_POST["id_beacon"]) &&
		$id_content = GetVal($_POST["id_content"]) &&
		$id_context = GetVal($_POST["id_context"]))
	{
		$sql = "DELETE FROM Push WHERE id_user = ".$id_user." AND
		id_beacon = ".$id_beacon." AND id_content = ".$id_content." AND
		id_context = ".$id_context."";
				
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
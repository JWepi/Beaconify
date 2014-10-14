
<?php

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if ($id_context = GetVal($_POST["id_context"]))
	{	
		$sql = "DELETE FROM Context WHERE id = '".$id_context."'";
				
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
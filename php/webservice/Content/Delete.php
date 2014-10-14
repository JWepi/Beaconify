
<?php

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if ($id_content = GetVal($_POST["id_content"]))
	{	
		$sql = "DELETE FROM Content WHERE id = '".$id_content."'";
				
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
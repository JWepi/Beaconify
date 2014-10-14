
<?php

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if ($id_beacon = GetVal($_POST["id_beacon"]))
	{	
		$sql = "DELETE FROM Beacon WHERE id = '".$id_beacon."'";
				
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
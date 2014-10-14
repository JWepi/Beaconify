
<?php

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if ($id_content = GetVal($_POST["id_content"]))
	{
		$name = GetVal($_POST["name"]);
		$type = GetVal($_POST["type"]);
		$value = GetVal($_POST["value"]);
	
		$hascondition = "";
	
		$sql = "UPDATE Content SET ";
		
		if ($name)
		{
			$sql .= $hascondition . "name = '".$name."' ";
			$hascondition = ",";
		}
		if ($type)
		{
			$sql .= $hascondition . "type = ".$type." ";
			$hascondition = ",";
		}
		if ($value)
		{
			$sql .= $hascondition . "value = '".$value."' ";
			$hascondition = ",";
		}
		
		$sql .= " WHERE id_content = '".$id_content."'";
				
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
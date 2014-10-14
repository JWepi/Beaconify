
<?php

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if ($id_context = GetVal($_POST["id_context"]))
	{
		$name = GetVal($_POST["name"]);
		$type = GetVal($_POST["type"]);
		$val1 = GetVal($_POST["val1"]);
		$val2 = GetVal($_POST["val2"]);
	
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
		if ($val1)
		{
			$sql .= $hascondition . "val1 = '".$val1."' ";
			$hascondition = ",";
		}
		if ($val2)
		{
			$sql .= $hascondition . "val2 = '".$val2."' ";
			$hascondition = ",";
		}
		
		$sql .= " WHERE id_context = '".$id_context."'";
				
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
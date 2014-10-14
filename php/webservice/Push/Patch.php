
<?php

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if ($id_user = GetVal($_POST["id_user"]) &&
		$id_beacon = GetVal($_POST["id_beacon"]) &&
		$id_content = GetVal($_POST["id_content"]) &&
		$id_context = GetVal($_POST["id_context"]) &&)
	{
		$new_id_beacon = GetVal($_POST["new_id_beacon"]);
		$new_id_content = GetVal($_POST["new_id_content"]);
		$new_id_context = GetVal($_POST["new_id_context"]);
		$name = GetVal($_POST["name"]);
	
		$hascondition = "";
	
		$sql = "UPDATE Push SET ";
		
		if ($new_id_beacon)
		{
			$sql .= $hascondition . "id_beacon = ".$new_id_beacon." ";
			$hascondition = ",";
		}
		if ($new_id_content)
		{
			$sql .= $hascondition . "id_content = ".$new_id_content." ";
			$hascondition = ",";
		}
		if ($new_id_context)
		{
			$sql .= $hascondition . "id_context = ".$new_id_context." ";
			$hascondition = ",";
		}
		if ($name)
		{
			$sql .= $hascondition . "name = '".$name."' ";
			$hascondition = ",";
		}
		
		$sql .= " WHERE id_user = ".$id_user."";
				
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
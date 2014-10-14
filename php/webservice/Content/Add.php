
<?php

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if ($id_user = GetVal($_POST["id_user"]) &&
		$name = GetVal($_POST["name"]) &&
		$type = GetVal($_POST["type"]) &&
		$value = GetVal($_POST["value"]))
	{
		$sql = "INSERT INTO Content VALUES('','".$name."',".$type.",'".$value."')";
		
		if ($result = mysql_query($sql))
		{
			$subsql = "SELECT MAX(id) FROM Content WHERE name = '".$name."' AND 
			type = ".$type." AND value = '".$value."'";
			
			if ($subresult = mysql_query($subsql))
			{
				$row = mysql_fetch_assoc($subresult);
				$subsubsql = "INSERT INTO UserContent VALUES(".$id_user.", ".$row['id'].")";
				$deletequery = "DELETE FROM Content WHERE id = '".$row['id']."'";
				
				if ($subsubresult = mysql_query($subsubsql))
				{
					$ret = "success";
				}
				else
				{
					mysql_query($deletequery);
					$ret = "error;generic";
				}
			}
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
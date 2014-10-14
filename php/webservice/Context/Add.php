
<?php

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if ($id_user = GetVal($_POST["id_user"]) &&
		$name = GetVal($_POST["name"]) &&
		$type = GetVal($_POST["type"]) &&
		$val1 = GetVal($_POST["val1"]))
	{
		$val2 = GetVal($_POST["val2"]);
		$sql = "INSERT INTO Context VALUES('','".$name."',".$type.",'".$val1."',
		".($val2?"'".$val2."'":"''").")";
		
		if ($result = mysql_query($sql))
		{
			$subsql = "SELECT MAX(id) FROM Context WHERE name = '".$name."' AND 
			type = ".$type." AND val1 = '".$val1."' AND val2 = '".$val2."'";
			
			if ($subresult = mysql_query($subsql))
			{
				$row = mysql_fetch_assoc($subresult);
				$subsubsql = "INSERT INTO UserContext VALUES(".$id_user.", ".$row['id'].")";
				$deletequery = "DELETE FROM Context WHERE id = '".$row['id']."'";
				
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
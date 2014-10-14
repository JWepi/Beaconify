
<?php

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if ($identity = GetVal($_POST["identity"]))
	{
		$name = GetVal($_POST["name"]);
		$sub1 = GetVal($_POST["sub1"]);
		$sub2 = GetVal($_POST["sub2"]);
		$active = GetVal($_POST["active"]);
	
		$hascondition = "";
	
		$sql = "UPDATE Beacon SET ";
		
		if ($name)
		{
			$sql .= $hascondition . "name = '".$name."' ";
			$hascondition = ",";
		}
		if ($sub1)
		{
			$sql .= $hascondition . "sub1 = ".$sub1." ";
			$hascondition = ",";
		}
		if ($sub2)
		{
			$sql .= $hascondition . "sub2 = ".$sub2." ";
			$hascondition = ",";
		}
		if ($active)
		{
			$sql .= $hascondition . "active = ".$active." ";
			$hascondition = ",";
		}
		
		$sql .= " WHERE identity = '".$identity."'";
				
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
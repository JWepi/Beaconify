
<?php

	include_once("../config.php");
	include_once("../utils.php");

	$ret = "";

	if ($id_user = GetVal($_POST["id_user"]) &&
		$identity = GetVal($_POST["identity"]) &&
		$name = GetVal($_POST["name"]) &&
		$sub1 = GetVal($_POST["sub1"]) &&
		$sub2 = GetVal($_POST["sub2"]))
	{		
		if (CheckIdentity($identity))
		{
			$sql = "INSERT INTO Beacon VALUES('','".$identity."','".$name."',".time().",".$sub1.",".$sub2.",0)";
			
			if ($result = mysql_query($sql))
			{
				$subsql = "SELECT * FROM Beacon WHERE identity = '".$identity."'";
				
				if ($subresult = mysql_query($subsql))
				{
					$row = mysql_fetch_assoc($subresult);
					$subsubsql = "INSERT INTO UserBeacon VALUES(".$id_user.", ".$row['id'].")";
					$deletequery = "DELETE FROM Beacon WHERE id = '".$row['id']."'";
					
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
			$ret = "error;beacon_identity_exists";
		}
	}
	else
	{
		$ret = "error;missing_param";
	}

	echo($ret);
?>
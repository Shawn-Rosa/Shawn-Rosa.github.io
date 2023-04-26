<?php
header("Content-type: application/json");
include ('class_lib/RosS_displayTable.php');



$id = $_REQUEST['id'];
$DB_Access = new RosS_displayTable();

$DB_Result = $DB_Access->selectOne($id);
if(is_null($DB_Result)){
	$rValue = "No records with ID " . $id . "\n";
}
else
{
	$rValue = "Record with ID " . $id . "\n";
	while($row = $DB_Result->fetch_assoc())
	{
		foreach($row as $value)
		{
			$rValue = $rValue . "$value ";
		}
		$rValue = $rValue . "\n";
	}
}
print($rValue);
?>
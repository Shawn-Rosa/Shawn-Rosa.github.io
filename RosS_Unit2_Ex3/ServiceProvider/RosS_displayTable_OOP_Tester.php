<?php
include('class_lib/RosS_displayTable.php'); //to provide class/functions for DB Access

//$db = $_REQUEST["db"]; //use defaults instead of a passed value

print("<h3>");

$DB_Access = new RosS_displayTable(); //create a new object from the RosS_displayTable class 

//print($DB_Access->connectTo()); //connectTo( ) called from within the methods in RosS_displayTable

print("<hr />");
$DB_Result = $DB_Access->showDatabases( ); // call the showDatabases function 
$rValue = "List of Databases in MySQL: <br />";
		while($row = $DB_Result->fetch_assoc())
		{ 
			foreach($row as $value)
			{
				$rValue = $rValue . "$value <br />";
			}
		}
print($rValue);


print("<hr />");
$DB_Result = $DB_Access->showTables();
$rValue = "List of Tables in students: <br />";
		while($row = $DB_Result->fetch_assoc())
		{ 
			foreach($row as $value)
			{
				$rValue = $rValue . "$value <br />";
			}
		}
print($rValue);


print("<hr />");
$table = "ross_vehicle"; //set which table to display records from
$DB_Result = $DB_Access->displayRecords($table);
$rValue = "List of Records from " . $table . " table<br />";
		while($row = $DB_Result->fetch_assoc())
		{ 
			foreach($row as $value)
			{
				$rValue = $rValue . "$value "; //display record values with space between
			}
			$rValue = $rValue . "<br />";
		}
print($rValue);

print("<hr />");
$id = 2;
$DB_Result = $DB_Access->selectOne($id);
if(is_null($DB_Result)){
	$rValue = "No records with ID " . $id . "<br />";
}
else
{
	$rValue = "Record with ID " . $id . "<br />";
	while($row = $DB_Result->fetch_assoc())
	{
		foreach($row as $value)
		{
			$rValue = $rValue . "$value ";
		}
		$rValue = $rValue . "<br />";
	}
}
print($rValue);

print("</h3>");
 

?>

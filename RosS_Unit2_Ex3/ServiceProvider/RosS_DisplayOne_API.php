<?php
include('class_lib/RosS_displayTable.php'); //to provide class/functions for DB Access

$DB_Access = new RosS_displayTable();

$id = $_REQUEST['id'];//"vehicles"; //only provide access to ross_vehicle table 

$DB_Result = $DB_Access->selectOne($id); //This API only shows Records

$data = array(); //create array for JSON to send back

$index = 0;
while($row = $DB_Result->fetch_assoc())
{ $rValue = "";
  foreach($row as $value)
      {$rValue = $rValue . "$value ";}
  $data[] = $rValue; //"TestValue";
}

print(json_encode($data));
?>
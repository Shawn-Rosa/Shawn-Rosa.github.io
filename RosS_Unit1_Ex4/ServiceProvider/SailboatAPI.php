<?php
header("Content-type: application/json");
include('class_lib/SailboatDB.php');

$sailboat = $_REQUEST['sailboat']; 

$sailboatDB = new SailboatDB(); 
$rSailboat = $sailboatDB->getSailboat($sailboat); 

$data = array(); 
$data['sailboatString'] = $rSailboat->toString(); 
$data['sailboatName'] = $rSailboat->getBoatName();
$data['sailboatOwnerName'] = $rSailboat->getOwnerName();
$data['sailboatNumberOfSails'] = $rSailboat->getNumberOfSails();
$data['sailboatPrice'] = $rSailboat->getPrice();

print(json_encode($data));

?>
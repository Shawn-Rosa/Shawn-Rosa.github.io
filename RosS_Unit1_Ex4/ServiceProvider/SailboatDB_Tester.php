<?php
include('class_lib/SailboatDB.php');

$sailboatDB = new SailboatDB();
$rSailboat = $sailboatDB->getSailboat("Santa Maria");
print("Sailboat Name: " . $rSailboat->getBoatName());
print("<br />");
print("Sailboat Owner: " . $rSailboat->getOwnerName());
print("<br />");
print("Sailboat Number of Sails: " . $rSailboat->getNumberOfSails());
print("<br />");
print("Sailboat Price: " . $rSailboat->getPrice());
print("<br /><br />");
print($rSailboat->toString());

?>
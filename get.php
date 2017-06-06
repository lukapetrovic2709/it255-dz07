<?php
$type = $_GET['type'];
if($type == "json"){
	header("Content-type: application/json");
	$test_array = array ('ime' => 'Luka','prezime' => 'Petrovic',);
	echo json_encode($test_array);
	}
	else {header("Content-type: text/xml");
	$test_array = array ('Luka' => 'ime','Petrovic' => 'prezime',);
	$xml = new SimpleXMLElement('<root/>');
	array_walk_recursive($test_array, array ($xml, 'addChild'));
	print $xml->asXML();
}?>
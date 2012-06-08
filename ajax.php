<?php
	$tmp = explode(',', $_GET['bounds']);
	$bounds = array();
	$bounds['ne']['lat'] = $tmp[0];
	$bounds['ne']['lng'] = $tmp[1];
	$bounds['sw']['lat'] = $tmp[2];
	$bounds['sw']['lng'] = $tmp[3];
	
	$points = array();
	$points[0]['lat'] = 40.81259;
	$points[0]['lng'] = -96.70189;
	$points[1]['lat'] = 40.8132;
	$points[1]['lng'] = -96.7260;
	
	foreach ($points as $point) {
		if ($bounds['sw']['lat'] < $point['lat'] && $point['lat'] < $bounds['ne']['lat'] && $bounds['sw']['lng'] < $point['lng'] < $bounds['ne']['lng']) {
		
			
		
		}
	}
	
?>
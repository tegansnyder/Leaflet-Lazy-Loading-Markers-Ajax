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
	$points[2]['lat'] = 40.7704;
	$points[2]['lng'] = -96.8268;
	$points[3]['lat'] = 40.7603;
	$points[3]['lng'] = -96.8026;
	$points[4]['lat'] = 40.7860;
	$points[4]['lng'] = -96.8306;
	$points[5]['lat'] = 40.7512;
	$points[5]['lng'] = -96.7813;
	$points[6]['lat'] = 40.7401;
	$points[6]['lng'] = -96.7355;
	$points[7]['lat'] = 40.7600;
	$points[7]['lng'] = -96.7267;
	$points[8]['lat'] = 40.7692;
	$points[8]['lng'] = -96.6790;
	$points[9]['lat'] = 40.7917;
	$points[9]['lng'] = -96.6519;
	$points[10]['lat'] = 40.8295;
	$points[10]['lng'] = -96.6284;
	$points[11]['lat'] = 40.8634;
	$points[11]['lng'] = -96.6474;
	$points[12]['lat'] = 40.8613;
	$points[12]['lng'] = -96.7137;
	$points[13]['lat'] = 40.8490;
	$points[13]['lng'] = -96.8136;

	$inBounds = array();
	$x = 0;
	
	//http://stackoverflow.com/questions/10939408/determine-if-lat-lng-in-bounds
	
	foreach ($points as $point) {
		if ($bounds['sw']['lat'] < $point['lat'] && $point['lat'] < $bounds['ne']['lat'] && $bounds['sw']['lng'] < $point['lng'] && $point['lng'] < $bounds['ne']['lng']) {
		
			$inBounds[$x] = $point;
			$x = $x + 1;
		
		}
	}
	
	echo json_encode($inBounds);
	
?>
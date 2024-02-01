<?php
global $Wcms;

if (defined('VERSION')) {
	$Wcms->addListener('settings', 'visioning')
}

function visioning($args) {
	global $Wcms;
	
	if (!$Wcms->loggedIn) {
		return $args;
	}
	
	// Search and insert before "<p class='subTitle'>Menu</p>"
	$search  = '<p class="subTitle">Menu</p>';
	$field   = '<p class="subTitle">Visa Center Name</p>';
	$field  .= '<div data-target="config" id="centerName" class="editText">' . $Wcms->get('config', 'centerName') . '</div>';
	$field  .= $search;
	$result  = preg_replace($search, '', $args[0]);
	$args[0] = $result;
	
	return $args;
}
?>

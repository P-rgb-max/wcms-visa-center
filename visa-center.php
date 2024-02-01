<?php
global $Wcms;

if (defined('VERSION')) {
	$Wcms->addListener('admin', 'visioning')
}

function visioning($args) {
	global $Wcms;
	
	if (!$Wcms->loggedIn) {
		return $args;
	}
	
	$args[0] .= '<form action="' . $Wcms->asset('save.php') . '" method="post"><input type="text" name="visa" placeholder="Enter visa center type"><submit value="Save it"></form>';
	
	return $args;
}
?>

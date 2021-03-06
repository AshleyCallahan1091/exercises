<?php
	date_default_timezone_set('America/Chicago');

	function logMessage($logLevel, $message)
	{
	  	$filename = "log-" . date('Y-m-d') . '.log';
	  	$handle = fopen($filename, 'a');

	  	$formattedMessage = date('Y-m-d H:i:s') . "[$logLevel] $message";
	  	fwrite($handle, $formattedMessage);
	}

	function logInfo($message) {
		logMessage('INFO', $message);
	}

	function logError($message){
		logMessage('ERROR', $message);

	}
	
	logInfo("I'm with you til the end of the line.");
	logError("Hail Hydra.");


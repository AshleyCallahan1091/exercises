<?php

function parseContacts($filename)
{
	$people = array();
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contacts = explode("\n", trim($contents));
	foreach($contacts as $contact) {
		$contact = explode("|", $contact);
		$formatNumber = substr($contact[1], 0, 3) . '-' . substr($contact[1], 3, 3) . '-' . substr($contact[1], 6);
		$empty = [];
		$empty['name'] = $contact[0];
		$empty['number'] = $formatNumber;
		$people[] = $empty;
	}
	
	fclose($handle);

	return $people;
}

var_dump(parseContacts('contacts.txt'));

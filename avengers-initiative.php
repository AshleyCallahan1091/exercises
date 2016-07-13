<?php

//Global Variables

$mainMenu = " 1. View Recruits\n 2. Add New Recruit\n 3. Search Recruits By Name\n 4. Remove Existing Recruit\n 5. Exit Program\nEnter one of these options: 1, 2, 3, 4 or 5;\n";




//Reusable Functions

function mainMenu ($mainMenu){
	fwrite(STDOUT, $mainMenu);
}

function directorOverride($directorOverride) {
	$directorOverride = "Fury, Nicholas J";
	$hydra = "Pierce, Alexander";
	$ultron = "Ultron";
	fwrite(STDOUT, "Director Override?\n");
	$userInput = trim(fgets(STDIN));
	if ($userInput == trim($directorOverride)) {
		fwrite(STDOUT, "My apologies, Director Fury. Carry on.\n");
		mainMenu($mainMenu);
	} elseif ($userInput == trim($hydra)) {
		fwrite(STDOUT, "You are not welcome here, Mr. Pierce.\nI must ask you to leave.\n");
	} elseif ($userInput == trim($ultron)){
		fwrite(STDOUT, "Admirable attempt but not on my watch.\n");
	} else {
		fwrite(STDOUT, "A remarkable attempt but to no avail. You may leave now.\n");
	}
}




//Menu Functions

function jarvis ($mainMenu){
	mainMenu($mainMenu);
	$userInput = trim(fgets(STDIN));
	// $directorOverride = "Fury, Nicholas J";
	// $hydra = "Pierce, Alexander";
	// $ultron = "Ultron";


	//Menu Selectors

	switch ($userInput) {

		case '1':
			var_dump(openRecruits('recruits.txt'));
			jarvis($mainMenu);
			break;

		case '2':
			var_dump(addNewRecruit('recruits.txt'));
			jarvis($mainMenu);
			break;

		case '3':
			var_dump(searchRecruits('recruits.txt'));
			jarvis($mainMenu);
			break;

		case '4':
			deleteRecruits('recruits.txt');
			jarvis($mainMenu);
			break;

		case '5':
			fwrite(STDOUT, "Powering down\n");
			break;

		default:
			fwrite(STDOUT, "ACCESS DENIED\n");
			directorOverride($directorOverride);
	}

 }


	//Open Recruits File
function openRecruits($filename)
{
	$informationStation = array();
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$recruits = explode("\n", trim($contents));
	foreach($recruits as $recruit) {
		$recruit = explode("|", $recruit);
		$formatNumber = substr($recruit[1], 0, 3) . '-' . substr($recruit[1], 3, 3) . '-' . substr($recruit[1], 6);
		$empty = [];
		$empty['Recruit'] = $recruit[0];
		$empty['Number'] = $formatNumber;
		$informationStation[] = $empty;
	}
	fclose($handle);
	return $informationStation;
}

	//Add New Recruits

function addNewRecruit($filename)
{
	$ynInput = "Y";
  	do {
  		$handle = fopen($filename, 'a');

	  	fwrite(STDOUT, "What is the recruit's name?\n");
		$recruit = trim(fgets(STDIN));

		fwrite(STDOUT, "What is the recruit's number?\n");
		$number = trim(fgets(STDIN));

	  	$entry = "$recruit|$number\n";

	  	fwrite($handle, $entry);

	  	fwrite(STDOUT, "Would you like to add another recruit? Y or N\n");
		$ynInput = trim(fgets(STDIN));

	  } while ($ynInput === "Y");


	  fclose($handle);
}

	//Search Recruits

function searchRecruits($filename)
{
	$informationStation = array();
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$recruits = explode("\n", trim($contents));
	foreach($recruits as $recruit) {
		$recruit = explode("|", $recruit);
		$formatNumber = substr($recruit[1], 0, 3) . '-' . substr($recruit[1], 3, 3) . '-' . substr($recruit[1], 6);
		$empty = [];
		$empty['Recruit'] = $recruit[0];
		$empty['Contact'] = $formatNumber;
		$informationStation[] = $empty;
	}
	fwrite(STDOUT, "Which recruit are you searching for today?\n");
	
	$chosenRecruit = trim(fgets(STDIN));
	fwrite(STDOUT, "My pleasure.\n");
	foreach ($informationStation as $recruit){
		foreach ($recruit as $info){
			if(array_search($chosenRecruit, $recruit) !== false){
				return $recruit;
			} 
		}
	}
	fclose($handle);
}


	//Delete Recruits

function deleteRecruits($filename)
{
	// $directorOverride = "Fury, Nicholas J";
	// $hydra = "Pierce, Alexander";
	// $ultron = "Ultron";
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$recruits = explode("\n", trim($contents));
	fwrite(STDOUT, "Which recruit are you looking to remove today?\n");
	$chosenRecruit = trim(fgets(STDIN));
	
	
	
	foreach ($recruits as $recruit => $info){
		if(strpos($info, $chosenRecruit) !== false){
			var_dump($recruits[$recruit]);
		} 
	}
	
	fwrite(STDOUT, "Are you sure you want to remove $chosenRecruit from the Avengers Initiative? Y or N\n");
	$ynInput = trim(fgets(STDIN));
	if ($ynInput == "Y") {
		// fwrite(STDERR, "ACCESS DENIED\n");
		// fwrite(STDOUT, "Director Override?\n");
		// $userInput = trim(fgets(STDIN));
		// if ($userInput == trim($directorOverride)) {
			// fwrite(STDOUT, "My apologies, Director Fury. Carry on.\n");
			var_dump($recruits[$recruit]);
			unset($recruits[$recruit]);
	// 	} else {
	// 		fwrite(STDERR, "ACCESS DENIED\n");
	// 	}

	// } elseif ($ynInput == "N") {

	// 	fwrite(STDOUT, "Excellent choice.\n");

	} else {
		fwrite(STDERR, "ACCESS DENIED\n");
		// directorOverride($directorOverride);
	}

	fclose($handle);
}











//Welcome Sequence

$welcome = fwrite(STDOUT, "Welcome to the Avengers Initiative.\nMy name is JARVIS.\nFormer Director Fury has left me in charge while he is away.\nHow may I be of assistance to you today?\n"); 

jarvis($mainMenu);








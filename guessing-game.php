<?php 


$min = 1;
$max = 100;


if ($argc == 3 ) {

	if (is_numeric($argv[1]) && is_numeric($argv[2]) && $argv[1] < $argv[2]) {

		$min = $argv[1];
		$max = $argv[2];
	} else {
		fwrite(STDERR, "Give two NUMBER values, you walnut");
		exit(1);
	}
	
}
  
$randomNumber = mt_rand($min, $max);
$guessCount = 0;

fwrite(STDOUT, "I'm thinking of a number between " . $min . " and " . $max . "\n");


do {
	
	fwrite(STDOUT, "What is it? \n");
	$userGuess = trim(fgets(STDIN));
	if ($userGuess < $randomNumber) {
		fwrite(STDOUT, "Too low! \n");
		$guessCount++;
	} elseif ($userGuess > $randomNumber) {
		fwrite(STDOUT, "Too high! \n");
		$guessCount++;
	} 
} while ($userGuess != $randomNumber);
		fwrite(STDOUT, "Go team! \n");
		fwrite(STDOUT, "Guesses made: " . $guessCount . "\n");
		fwrite(STDOUT, "To leave this exciting game, press Ctl + C \n"); 


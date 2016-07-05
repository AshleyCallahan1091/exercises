<?php 

if ($argc == 3) {
  
$randomNumber = mt_rand($argv[1], $argv[2]);
$guessCount = 0;

fwrite(STDOUT, "I'm thinking of a number between 1-100. \n");


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

}
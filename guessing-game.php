<?php 

$randomNumber = mt_rand(1, 42);
$guessCount = 1;

fwrite(STDOUT, "I'm thinking of a number between 1-41. \n");


do {
	
	fwrite(STDOUT, "What is it? \n");
	$userGuess = fgets(STDIN);

	if ($userGuess < $randomNumber) {
		echo "Too low! \n";
		$guessCount++;
	} elseif ($userGuess > $randomNumber) {
		echo "Too high! \n";
		$guessCount++;
	} 
} while ($userGuess != $randomNumber);
		echo "Go team! \n";
		echo "Guesses made: " . $guessCount . "\n";
		echo "To leave this exciting game, press Ctl + C \n"; 
<?php

fwrite(STDOUT, "Enter a starting number: \n");
$startingNumber = trim(fgets(STDIN));

fwrite(STDOUT, "Enter an ending number: \n");
$endingNumber = trim(fgets(STDIN));

if (is_numeric($startingNumber) && is_numeric($endingNumber) && $startingNumber < $endingNumber) {
	
} else {
	fwrite(STDERR, "Give a number value, you walnut");
	exit(1);
}

fwrite(STDOUT, "Enter a counting increment: \n");
$increment = trim(fgets(STDIN));

if($increment == 0 || $increment == ""){
	$increment = 1;
}

while ($endingNumber < $startingNumber) {
	$endingNumber = 0;
	fwrite(STDOUT, "Enter an ending number: \n");
	$endingNumber = trim(fgets(STDIN));
}

for ($i = $startingNumber; $i < $endingNumber; $i++) {
	if($i%$increment == 0){

	fwrite(STDOUT, "$i \n");
	}


}



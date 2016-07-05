<?php

fwrite(STDOUT, "Enter a starting number: \n");
$startingNumber = trim(fgets(STDIN));

fwrite(STDOUT, "Enter an ending number: \n");
$endingNumber = trim(fgets(STDIN));

fwrite(STDOUT, "Enter a counting increment: \n");
$increment = trim(fgets(STDIN));

while ($endingNumber < $startingNumber) {
	$endingNumber = 0;
	fwrite(STDOUT, "Enter an ending number: \n");
	$endingNumber = trim(fgets(STDIN));

}

for ($i = $startingNumber; $i < $endingNumber; $i++) {
	fwrite(STDOUT, "$i \n");
}



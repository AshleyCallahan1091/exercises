<?php 

$sum = 0;
for ($i = 0; $i < 10; $i++) {
	fwrite(STDOUT, "Enter a number: \n");
	$number = trim(fgets(STDIN));
	$sum += $number;
}

fwrite(STDOUT, "The sum of your numbers is $sum");
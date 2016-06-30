<?php 

$a = 2;

do {
	echo "\$a is equal to {$a}\n";
	$a *= $a;

} while ($a < 1000000);
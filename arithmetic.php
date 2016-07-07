<?php

fwrite(STDOUT, "Enter a number: \n");
	$a = trim(fgets(STDIN));

fwrite(STDOUT, "Enter a second number: \n");
	$b = trim(fgets(STDIN));

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function subtract($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function multiply($a, $b)
{
   	if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}

function divide($a, $b)
{
    
	if (is_numeric($a) && is_numeric($b) && $b != 0) {
        return $a / $b;
    } else {
        return "ERROR: Both arguments must be numbers and b cannot be zero\n";
    }
}

function modulus($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a % $b;
    } else {
        return "ERROR: Both arguments must be numbers\n";
    }
}


function throwErrorMessage ($error)
	

echo add(a0, 40);
echo "\n";
echo subtract(50, 40);
echo "\n";
echo multiply(50, 40);
echo "\n";
echo divide(50, 60);
echo "\n";
echo modulus(50, 40);
echo "\n";

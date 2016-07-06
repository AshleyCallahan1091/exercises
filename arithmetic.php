<?php

$a = 1;
$b = 2;

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
   	return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b)
{
    return $a % $b;
}


echo add(50, 40);
echo "\n";
echo subtract(50, 40);
echo "\n";
echo multiply(50, 40);
echo "\n";
echo divide(50, 40);
echo "\n";
echo modulus(50, 40);
echo "\n";

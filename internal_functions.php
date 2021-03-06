<?php

// TODO: Create your inspect() function here

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

function inspect($variable) { 
	if (is_array($variable) && empty($variable))
		return "The array is empty";
	elseif (is_array($variable)) {
		return 'The ' . gettype($variable) . ' is Array (' . join($variable, ', ') . ')';
	} elseif (is_null($variable)) {
		return "The value is null";
	} elseif (is_bool($variable)) {
		if ($variable) {
			return "The boolean is true";
		} else {
			return "The boolean is false";
		}
	} elseif (is_string($variable) && $variable == ""){
		return "The value is an empty string";
	}
	return "The " . gettype($variable) . ' is ' . $variable;
}

echo 'Inspecting $num1: ' . inspect($num1) . PHP_EOL;
echo 'Inspecting $num2: ' . inspect($num2) . PHP_EOL;
echo 'Inspecting $num3: ' . inspect($num3) . PHP_EOL;
echo 'Inspecting $num4: ' . inspect($array2) . PHP_EOL;
echo 'Inspecting $null: ' . inspect($null) . PHP_EOL;
echo 'Inspecting $bool1: ' . inspect($bool1) . PHP_EOL;
echo 'Inspecting $bool2: '  . inspect($bool2) . PHP_EOL;
echo 'Inspecting $string1: ' . inspect($string1) . PHP_EOL;
echo 'Inspecting $string2: ' . inspect($string2) . PHP_EOL;
echo 'Inspecting $array1: ' . inspect($array1) . PHP_EOL;
echo 'Inspecting $array2: ' . inspect($array2) . PHP_EOL;


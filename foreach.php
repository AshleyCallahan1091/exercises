<?php  
	$things = ['Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11];
	foreach ($things as $thing) {
		if (is_numeric($thing)) {
			echo "{$thing} is a number\n";
		 } else if (is_string($thing)) {
			 echo "{$thing} is a string\n";
		 } else if (is_int($thing)) {
			 echo "{$thing} is a integer\n";
		 } else if (is_bool($thing)) {
			 echo "{$thing} is a boolean\n";
		 } else if (is_array($thing)) {
			 echo var_dump($thing), " is an array\n";
		 }  else if (is_float($thing)) {
			 echo "{$thing} is a foat\n";
		 } else {
			 echo "{$thing} is null\n";
		 }
		}
		echo "\n";
		foreach ($things as $thing) {
			if (is_scalar($thing)) {
			echo "{$thing} is scalar, ";
			}
	  	}
	echo "\n";
	  foreach ($things as $thing) {
		  if (is_array($thing)) {
			echo "Array (";
			foreach ($thing as $number) {
				echo "{$number},";
			}
			echo ")\n";
		} else {
			echo "{$thing}\n";
		  	}
	  	}
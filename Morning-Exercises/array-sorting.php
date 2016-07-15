<?php 

	$array = array('e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h');

	print_r($array);

	$count = count($array);

	for ($a = 0; $a < $count; $a++) {
		for ($b = $a + 1; $b < $count; $b++) {
			if ($array[$a] > $array[$b]) {
				$filler = $array[$a];
				$array[$a] = $array[$b];
				$array[$b] = $filler;
			}
		}
	}

	print_r($array);

	$unsorted = $array;
	$sorted = [];

	foreach ($array as $i => $letter) {
		$min = min($unsorted);
		$sorted[] = $min;
		$index = array_search($min, $unsorted);
		unset($unsorted[$index]);

	}

	print_r($sorted);
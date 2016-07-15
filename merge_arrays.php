<?php

	$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

	$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

	// function combine_arrays ($names, $compare) {
	// 	foreach ($compare as $name) {
	//     	$result = array_search($names, $compare);
	//     	array_push($names, $result);
	// 	}
	// 	return print_r($names);

	// }
	// return combine_arrays($names, $compare);

	$array3 = [];

	 foreach ($compare as $name) {
		if (array_search($name, $names) === FALSE) {
		   array_push($names, $name);
		   
		} else {
			 $array3[] = $name;
		}
	}

	print_r($names);




<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//$result = array_search('Bob', $compare);

// if ($result === FALSE){
// 	return "FALSE \n";
// } else {
//     return "TRUE \n";
// }



function searchNames ($names, $compare) {
	foreach ($names as $name) {
    	$result = array_search($name, $compare);
        $same[] = $result;
	}
	return print_r($same);

}
return searchNames($names, $compare);
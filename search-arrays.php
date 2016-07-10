<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$result = array_search('Bob', $compare);

if ($result === FALSE){
	echo "FALSE \n";
} else {
    echo "TRUE \n";
}
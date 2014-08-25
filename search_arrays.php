<?php

 // first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function result_find ($array, $input){
	
	if (array_search($input, $array) === false)  {
		return false;
	} else {
		return true;
	}
}


// array_search($names, $compare);
// // array_keys($names);




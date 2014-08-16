<?php

// s = array(1, 2, 3, 4, 5);

// for ($i = 0; $i < count($numbers); $i++) {
//     echo "\$numbers has an element with a value of {$numbers[$i]}\n";
// }

// foreach($arrays as $value) {
// 	echo "\$value has a value of {$value}\n";
// }

// $numbers = array(1, 2, 3, 4, 5);
// foreach ($numbers as $value) {
//     $new_number is $value * 2;
//     echo ("$value * 2 = {$new_number}\n");
// }



// $animal_types = array('dogs', 'cats', 'birds', 'narwhals');
// foreach ($animal_types as $animal) {
//     echo "Old McDonald had a farm, and on that farm he raised some {$animal}\n";
// }


// $data = array(42, 'bacon', (6 * 3), 'The Big Bang Theory', 98.6);



$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $datum) {
    if (is_array($datum)) {
        print_r($datum);
    } else if (is_string($datum)) {
        echo "{$datum} is a string\n";
    } else if (is_float($datum)) {
        echo "{$datum} is a float\n";
    } else if (is_bool($datum)) {
        echo "{$datum} is a Boolean\n";
    } else if (is_null($datum)) {
        echo "{$datum} is null\n";
    } else if (is_int ($datum)) {
        echo "{$datum} is a int\n";
   	} 
}


// foreach ($things as $datum) {
//     if (is_scalar ($datum)) {
//         echo "{$datum} is a scalar\n";
//     }
// }
foreach ($things as $datum) {
    if (is_scalar ($datum)) {
        echo "{$datum}\n";
    }
}



?>
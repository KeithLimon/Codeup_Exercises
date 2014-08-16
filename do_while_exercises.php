<?php

// $a = 2;
// do {
//     echo "\$a is equal to {$a}\n";
//     $a *= $a;
// } while ($a <= 100000);

$a = 100;
do {
    echo "\$a is equal to {$a}\n";
    $a -= 5; //combined operator
} while ($a >= -10); //Tells it to stop in this line. when its false it will break 

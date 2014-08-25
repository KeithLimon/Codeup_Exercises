<?php

function get_input($upper = FALSE) {
    
    if ($upper) {
        return strtoupper(trim(fgets(STDIN)));
    }
  
    else {
        return trim(fgets(STDIN));
    }
}

$month_array = array( 
	'January' => 1,
    'February' => 2,
    'March' => 3,
    'April' => 4,
    'May' => 5,
    'June' => 6,
    'July ' => 7,
    'August' => 8,
    'September' => 9,
    'October' => 10,
    'November' => 11,
    'December' => 12,
);


$num = cal_days_in_month(CAL_GREGORIAN, get_input(), 2014); // 31
echo $Month . " " . "has" . " " . $num . " " . "days";

?>


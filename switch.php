<?php

//Set the default timeszone
date_default_timezone_set('America/Chicago');

//Get Day of Week as number
//	1 (for Monday) through 7 (for Sunday)
$day_of_week =date ('N'); //The captiol N sets the day correlating with 1-7

switch($day_of_week){
	case 1:
		echo 'Monday' . PHP_EOL;
	case 2:
		echo 'Tuesday' . PHP_EOL;
	case 3:
		echo 'Wednesday' . PHP_EOL;
	case 4:
		echo 'Thursday' . PHP_EOL;
	case 5:
		echo 'Friday' . PHP_EOL;
	case 6:
		echo 'Saturday' . PHP_EOL;
	case 7:
		echo 'Sunday' . PHP_EOL;
}


if ($day_of_week==1) {
	echo 'Monday' . PHP_EOL;
}
elseif ($day_of_week ==2) {
	echo 'Teusday'
}
elseif ($day_of_week==3) {
	echo 'Wednesday'
}
elseif ($day_of_week==4) {
	echo 'Thursday'
}
elseif ($day_of_week==5) {
	echo 'Friday'
}
elseif ($day_of_week==6) {
	echo 'Saturday'
}
elseif ($day_of_week==7) {
	echo 'Sunday'
}


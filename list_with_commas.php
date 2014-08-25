<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';


function humanizelist($string, alaphabetize = FALSE){
//exploding the array appart
	$array = explode(', ', string);
	sort(array);

//pop off last item.
	$last_item =array_pop($array);

	$humanizedList implode(', ' , array);

	$humanizedList .= ', and ' . $last_item;

	return $humanizelist;
}

$physicists_string = humanizelist ($physicists_string, TRUE);

echo "Some of the most famous fictional theoretical physicists are $humanizedList." . PHP_EOL


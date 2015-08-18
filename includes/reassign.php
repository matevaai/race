<?php

echo "Reassigning racers";
echo "\n------------------";

echo "\nOld racers: ";

foreach ($relations as $key_driver => $key_cars) {
	echo "\n".$drivers[$key_driver].": ".$cars[$key_cars];
}

echo "\n\nNew racers: ";

foreach ($drivers as $name) {
	$cars_key = array_rand($cars);
	echo "\n".$name.": ".$cars[$cars_key];
}
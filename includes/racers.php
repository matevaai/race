<?php 

echo "Info about the racers: ";
echo "\n---------------------";

foreach ($relations as $key_driver => $key_cars) {
	echo "\n".$drivers[$key_driver].": ".$cars[$key_cars];
}
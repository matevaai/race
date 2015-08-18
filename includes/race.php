<?php 

echo "Race results";
echo "\n-----------------";

$results = array();
$driver_keys = array_keys($drivers);

foreach ($driver_keys as $driver_key) {
	$results[$driver_key] = rand(40, 50);
}

$counter = 1;
asort($results, SORT_NUMERIC);

foreach ($results as $driver_key => $number) {
	echo "\n".$counter.". ".$drivers[$driver_key].": ".$number." min";
	$counter++;
}

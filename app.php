<?php

include('./data.php');

$help = "
php app.php PARAMETER

Please enter valid parameter: 
\tinfo - view race info
\tracers - info about the drivers and cars
\treassingn - toggle drivers and cars
\trace - run the race
";

if (isset($argv[1])) {

	if ($argv[1] == "info") {
		include('./includes/info.php');
	} elseif ($argv[1] == "racers") {
		include('./includes/racers.php');
	} elseif ($argv[1] == "reassign") {
		include('./includes/reassign.php');
	} elseif ($argv[1] == "race") {
		include('./includes/race.php');
	} elseif($argv[1] == "help") {
		echo $help;
	} else {
		echo $help;
	}
} else {
	echo $help;
}



//print_r($argv);
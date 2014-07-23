<?php

$input = '16,9';
$lines = explode("\n",$input);

function findsmallestmultiple($compare,$find) {
	$multiplier = $find;
	while ($multiplier<$compare) {
		$multiplier += $find;
	};
	print $multiplier.PHP_EOL;
};

foreach ($lines as $line) {
	$params = explode(',',$line);
	findsmallestmultiple($params[0],$params[1]);
};


?>
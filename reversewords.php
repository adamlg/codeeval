<?php

$input = 'BmK7 2PqkrGrT4BLM1tEtZ';
$lines = explode("\n",$input);

function reversewords($words) {
    for ($i=0; $i<count($words); $i++) {
        if ($i!=count($words)-1-$i && $i<count($words)/2) {
        	$temp = $words[$i];
        	//print 'temp is '.$temp;
            $words[$i] = $words[count($words)-1-$i];
            //print 'new words[$i] is '.$words[$i];
            $words[count($words)-1-$i] = $temp;
            //print 'new $words[count($words)-1-$i] is '.$words[count($words)-1-$i];
        };
    };
    for ($i=0; $i<count($words); $i++) {
        print $words[$i];
        if ($i<count($words)-1) {
            print ' ';
        } else {
            echo PHP_EOL;
        };
    };
};

foreach ($lines as $line) {
	$words = explode(' ',$line);
	reversewords($words);
};


?>
<?php

$input = '121';
$lines = explode("\n",$input);

$primes = array(0,1);
$squaresofprimes = array(0,1);

function listprimes($number) {
	global $primes, $squaresofprimes;
	for ($i=$primes[count($primes)-1]+1; $i<=sqrt($number); $i++) {
	
		foreach($primes as $prime) {
			if ($prime==0 || $prime==1){
				continue;
			} elseif (($i%$prime)==0){
		    	continue 2;
		};
	};
			$primes[count($primes)] = $i; //this builds an array of prime numbers
			$squaresofprimes[count($squaresofprimes)] = $i*$i; //an array of each prime squared
	};

};
$count=0;
function searching($x,$y,$number){
	
	global $primes, $squaresofprimes, $count;
	if ($y<$x) {
		print $count.PHP_EOL;
		$count = 0;
		return;
	} elseif ($squaresofprimes[$x]+$squaresofprimes[$y]==$number) {
		$count++;
		searching($x+1,$y-1,$number);
	} elseif ($squaresofprimes[$x]+$squaresofprimes[$y]<$number){
		searching($x+1,$y,$number);
	} elseif ($squaresofprimes[$x]+$squaresofprimes[$y]>$number) {
		searching($x,$y-1,$number);
	};
};

foreach ($lines as $line) {
	if($primes[count($primes)-1]<sqrt($line)) {
			listprimes($line);
		};
	searching(0,count($squaresofprimes)-1,$line);
};
print_r($squaresofprimes);
print_r($primes);

?>
<?php


$primes = array();
$num = 2;
$sumprimes = 0;
while (count($primes)<1000) {
	foreach($primes as $prime) {
		if(($num%$prime)==0){
		    $num++;
	    	continue 2;
	}
};
		$sumprimes += $num;
		$primes[count($primes)] = $num;
		$num++;
};

print $sumprimes;

/*$sumprimes = 0;

for($i=0; $i<count($primes); $i++) {
	$sumprimes += $primes[$i];
};
print $sumprimes;*/

?>
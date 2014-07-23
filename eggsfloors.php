<?php

//$input = file_get_contents($argv[1]);
$input = 'Zu6';
$lines = explode("\n",$input);
foreach($lines as $line){


$combinations = array($line{0}.$line{1},$line{1}.$line{0});
$elementindex = count($combinations)-1;
$oldcombinations = array();


while ($elementindex+1<strlen($line)) {
	$oldcombinations = $combinations;
	$combinations = array();
	$combo = '';
	$elementindex++;
	foreach ($oldcombinations as $oldcombo) {
		$addedelement = $line{$elementindex};
		$old = str_split($oldcombo);
		//echo $addedelement;
		//$combo{0} = $addedelement;
		//echo $combo{0};
		for($i=0;$i<count($old)+1;$i++) {
			$combo = $addedelement;
			$k = 0;
			if($i!=0) {
				for($j=$i;$j>0;$j--){
					$combo = $old[$k].$combo;
					$k++;
				};
			};
			for($j=$i;$j<count($old);$j++) {
				$combo = $combo.$old[$k];
				$k++;
			}; 
			array_push($combinations,$combo);
		};
		
	};
};
sort($combinations);
for($i=0;$i<count($combinations);$i++){
	print $combinations[$i];
	if($i+1<count($combinations)) {
		print ',';
	};
};
print PHP_EOL;
};
?>
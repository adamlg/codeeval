<?php

//$input = file_get_contents($argv[1]);
$input = '3 2';
$lines = explode("\n",$input);


foreach ($lines as $line) {
	$nums = explode(' ',$line);

	$unlocked = $nums[0];
	if($nums[1]%2==0){
		for($i=1;$i<=$nums[0];$i++){
		
			if($i%2==0 && $i%3!=0){
				$unlocked--;
			};
	/*
			if($i%6==0){
				//nothing happens - it's locked and unlocked in the same iteration
			};
	*/
			if($i%3==0 && $i%2!=0){
				$unlocked--;
			};
	/*
			if($i%3!=0 && $i%2!=0){
				//nothing happens - these are never changed
			};
	*/	};

		if($nums[0]%6==0){
			$unlocked--;
			};
		if($nums[0]%3==0 && $nums[0]%2!=0){
			$unlocked++;
			};
		if($nums[0]%2==0 && $nums[0]%3!=0){
			$unlocked++;
			};
		if($nums[0]%3!=0 && $nums[0]%2!=0){
			$unlocked--;
			};
	} else {
		for($i=1;$i<=$nums[0];$i++){
		
			if($i%2==0 && $i%3!=0){
				$unlocked--;
			};
	/*
			if($i%6==0){
				//nothing happens - it's locked and unlocked in the same iteration
			};
	
			if($i%3==0 && $i%2!=0){
				//nothing happens - it's locked and unlocked on consecutive iterations
				continue;
			};
	/*
			if($i%3!=0 && $i%2!=0){
				//nothing happens - these are never changed
			};
	*/	};

		if($nums[0]%6==0){
			$unlocked--;
			};
		if($nums[0]%3==0 && $nums[0]%2!=0){
			$unlocked--;
			};
		if($nums[0]%2==0 && $nums[0]%3!=0){
			$unlocked++;
			};
		if($nums[0]%3!=0 && $nums[0]%2!=0){
			$unlocked--;
			};
	};

print $unlocked.PHP_EOL;
	
};


?>
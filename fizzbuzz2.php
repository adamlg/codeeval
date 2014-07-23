<?php

$text = '3 5 15';
$input = explode(' ',$text);
print_r($input);

function fizzbuzz($a,$b,$n) {
for ($i=1; $i<=$n; $i++) {
    if($i%$a==0){
        print 'F';
    };
    if($i%$b==0){
        print'B';
    };
    if($i%$a!=0 && $i%$b!=0){
        print $i;
    };
    if($i!=$n){
    	print ' ';
    };
};
};

fizzbuzz($input[0],$input[1],$input[2]);
?>
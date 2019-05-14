<?php 

function calSteps($n = 6){
	if($n >= 3){
		return calSteps($n-1) + calSteps($n-2);
	}elseif($n==1){
		return 1;
	}elseif($n==2){
		return 2;
	}
}
echo calSteps();
 ?>

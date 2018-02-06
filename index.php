<?php
$ccNumber = "4012888888881881";
checkCCValid($ccNumber);
function checkCCValid($ccNumber){
	$sum = 0;
	$totalDigits = strlen($ccNumber);
	
	$arrResutl = array();
	for($i=$totalDigits;$i>0;$i--){
		$rightToleftSingleDigit = substr($ccNumber,$i-1,1);
		
		if($i%2 > 0){
			$doubleDigit = $rightToleftSingleDigit*2;
			
			if($doubleDigit > 9){
				$sum += $doubleDigit - 9;
			}
			else{
				$sum += $doubleDigit;
			}
		}
		else{
			$sum += $rightToleftSingleDigit;
		}
	}
	
	if($sum%10 == 0){
		echo "Credit Card $ccNumber is valid.";
	}
	else{
		echo "Credit Card $ccNumber is not valid.";
	}
}
?>
<?php
function bubbleSort(&$arr) {
	$n = sizeof($arr);

	// Traverse through all array elements
	for($i = 0; $i < $n; $i++) {
		$swapped = False;

		// Last i elements are already
		// in place
		for ($j = 0; $j < $n - $i - 1; $j++) {
			
			// traverse the array from 0 to
			// n-i-1. Swap if the element
			// found is greater than the
			// next element
			if ($arr[$j] <$arr[$j+1]) {
				$t = $arr[$j];
				$arr[$j] = $arr[$j+1];
				$arr[$j+1] = $t;
				$swapped = True;
			}
		}

		// IF no two elements were swapped
		// by inner loop, then break
		if ($swapped == False)
			break;
	}
}
		
// Driver code to test above
$arr = array(64, 34, 25, 12, 22, 11, 90);
$len = sizeof($arr);
bubbleSort($arr);

if($arr[0] == $arr[1]) {
echo "No element";
}
else {
echo "Second Largest element is ".$arr[1];
}
	
?>

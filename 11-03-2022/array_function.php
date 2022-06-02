<?php
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "<br>";



// gives the output in the key value pair
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2)) ;
echo "<br/>";

// POP function
$a=array("red","green","blue");
array_pop($a);
print_r($a);
echo "<br/>";


// PUSH Function
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
?> 
<?php  
$num = array("d","s", "f", "u" ,"d");  
$revnum = 0;  
$sum =0;
while ($num > 1)  
{  
$rem = $num % 10;  
$revnum = ($revnum * 10) + $rem;  
$num = ($num / 10); 
 
}  
echo "Reverse number of 23456 is: $revnum";
echo "Sum is:.$sum";  
?>
<?php

echo "Today is " . date("Y/m/d") . "<br>";

echo "Today is " . date("l"). "<br>";    


$d=mktime(11, 14, 54, 8, 12, 2022);
echo "Created date is " . date("Y-m-d h:i:sa", $d). "<br>";



date_default_timezone_set("India/Kolkata");
echo "The time is " . date("h:i:sa"); 



// The PHP strtotime() function is used to convert  
// human readable date string into a Unix timestamp
$d=strtotime("10:30pm march 15 2022");
echo "Created date is " . date("Y-m-d h:i:sa");
?>
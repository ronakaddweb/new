<?php  
    $a = array(45, 24, 8, 80, 62, 71, 10, 23, 43);  
    $val = 62;  
    $n = sizeof($a); 
    function linearSearch($a, $n, $val) {  
     
    for ($i = 0; $i < $n; $i++)  
    {  
        if ($a[$i] == $val)  
        return $i+1;  
    }  
    return -1;  
    }  
   $res = linearSearch($a, $n, $val);    
   echo "The elements are: ";  
   for ($i = 0; $i < $n; $i++)  
   echo " " , $a[$i];      
   if ($res == -1)  
   echo "<br>" , "Element is not present in the array";  
   else  
   echo "<br>" , "Element is present at " , $res , " position of array";  
?>  
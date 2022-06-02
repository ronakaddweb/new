<?php
$a=$_POST['prime'];
 if($a==1)
echo "enter number ";
for($i=2; $i <= $a/2; $i++){
    if( $a%$i==0){
        echo "$a is  not prime number";
        break;
    }
    
}
 if( $a%$i!==0)
echo "$a is a prime number";

?>
<?php
$n=$_POST['integer'];
$rev=0;
$sum=0;
for($i=1; $i<=strlen($n); $i++)
{
$rev=$n%10;
$sum=$sum+$rev;
$n=$n/10;
}
echo "the sum of digit : $sum";
?>
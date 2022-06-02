<?php 
$p=8;
$r=5;
$t=3;
$n=1;
$si=$p*$r*$t;
$ci=$p*pow((1+($r/$n)),$t);
echo "simple interest = ".$si."<br/>";
echo "compound interest = ".$ci;
?>
<?php
$n = $_GET['fact'];
$factorial = 1;
for($x= $n; $x>=1; $x--)
{
    $factorial=$factorial* $x;

}
echo "factorial of $n is ".$factorial;
?>
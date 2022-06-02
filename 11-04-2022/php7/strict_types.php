<?php
declare(strict_types=1);
function returnsum(float $a, float $b)
{
    return $a + $b;
}
$var = returnsum(3.1, 2.1);

// $var = returnsum(3, "2day");
echo $var;


?>
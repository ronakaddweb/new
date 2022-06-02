<?php
$a=121;
echo $a."<br>";
$p=$a;
$i=0;
while($p>0)
{
    $d=$p%10;
    $i=$i*10+$d;
    $p=(int)($p/10);   

}
if($i==$a){
    echo " number is palindrome number";
}
else
{
    echo "number is not palindrome number";
}

?>
<?php
$num = $_POST['table'];
$i =1;
while($i<=10){
    $temp = $num*$i;
    $i++;
    echo $temp;
    echo "<br>";

}
return 0;

?>
<?php
$name =  array('ronak','somay','jatin', 'shubham');

for($i=0;$i<sizeof($name);$i++){
    echo "$name[$i], ";
}
for($i=0;$i<(sizeof($name)-1);$i++){
    for($j=0;$j<(sizeof($name)-1-$i);$j++)
    {
        if($name[$j]>$name[$j+1]){
            $a = $name[$j];
            $name[$j] = $name[$j+1];
            $name[$j+1] = $a;
        }
    }
}
echo "<br>";
for($i=0;$i<sizeof($name);$i++){
    echo "$name[$i], ";
}
echo "</br>";
?>  
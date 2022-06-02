<?php
$num = $_POST['color'];
if($num = 'g' && $num = 'G'){
    echo "Green color";
}
elseif($num = 'w' && $num = 'W'){
    echo "White color";
}
else{
    echo "not valid";
}

?>
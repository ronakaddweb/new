<?php
$num1 = $_POST['a'];
$num2 = $_POST['b'];
$num3 = $_POST['option'];
switch($num3){
    case 1:
        $total = $num1 + $num2;
        echo "Addition is : " .$total;
        break;

    case 2:
        $total = $num1 - $num2;
        echo "subtraction is : " .$total;
        break;
    
    case 3:
        $total = $num1 * $num2;
        echo "multiplication is : " .$total;
        break;

    case 4:
        $total = $num1 / $num2;
        echo "Division is : " .$total;
        break;
        
    case 5:
        $total = $num1 % $num2;
        echo "Modulas is : " .$total;
        break;

    default:
    echo $num1, $num2;
    break;
}

?>
<?php
$days= $_POST['month'];

switch($days){
    case "january":
        echo "31 days";
        break;
    case "feburary":
        echo "29 0r 28 days";
        break;
    case "march":
        echo "31 days";
        break;
    case 
           "april":
        echo "30 days";
        break;
    case "may":
        echo "31";
        break;
    case "june" :
    echo "30 days"; 
    break; 
    case "july":
        echo "31 days";
        break;

    case "august":
        echo "30 days";
        break;
    case "september":
        echo "31 days";
        break;
    case "october":
        echo "30 day";
        break;
    case "november":
        echo "31 days";
        break;
    case "december":
        echo "30 days ";
        break;
    default :
    echo "invailed month name";                     
}
?>
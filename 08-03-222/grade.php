<?php
$num = $_POST['grade'];
if($num>=85){
    echo "Grade is: S" ;
}
elseif($num>=65){
    echo "grade is A";
}
elseif($num>=55){
    echo "grade is B";
}
elseif($num>=45){
    echo "grade is C";
}
else{
    echo "grade is F";
}


?>
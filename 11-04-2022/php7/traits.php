<?php
trait reader{
    public function add($var1 ,$var2){
        return $var1 + $var2;
    }
}
trait writer{
    public function multiplication($var1, $var2){
        return $var1*$var2;
    }
}
class file{
    use reader;
    // use writer;
    public function calculate($var1 , $var2){
        echo "Result of addition:".$this->add($var1,$var2) ."\n";
        // echo "Result of multiplication:".$this->multiplication($var1,$var2);
    }
}
$o = new file();
$o->calculate(5,3);

class write{
    use writer;
    public function calculate($var1 , $var2){
    echo "Result of multiplication:".$this->multiplication($var1,$var2);
    }
}
$o = new write();
$o->calculate(5,3);
?>

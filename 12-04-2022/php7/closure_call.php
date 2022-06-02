
<!-- before php 7 -->
<?php
   class A {
      private $x = 1;
   }

   $getValue = function() {
      return $this->x;
   };

   $value = $getValue->bindTo(new A, 'A'); 
   print("The value is :" . $value()) . "<br>";
?>

<!-- After php 7 --> 
 <?php
class b{
    private $x = 2;
}
$value = function(){
    return $this->x;
};
print("The value is using php7 :" .$value->call(new A));
?> 
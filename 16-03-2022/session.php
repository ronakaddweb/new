<form method = "POST" >
    username : <input name= "username" type="text">
    password : <input name="password" type="password">
<input type="submit" value="login">

</form>

<?php

if(isset($_SESSION[""])){
    echo "incorrect";}
else{
$a = $_POST['username'];
$b = $_POST['password'];

if($a=='admin'&& $b=='123'){
    session_start();
   $_SESSION["user"]=$a;
    header('location:session2.php');
} 


}

?>
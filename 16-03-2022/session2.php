<?php
// if(!isset($_COOKIE["username"])){

//     // header('location:session.php');
session_start();
if(isset($_SESSION['user'])){
    
    header('location:session.php');
}
else{

echo $_SESSION["user"];
echo "<form method=post> <input type=submit value=logout name=logout></form>";
if($_POST["logout"]){
       session_destroy();
    header('location:session.php');
}
}
// error_reporting(0);
  


?>




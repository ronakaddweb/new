<?php
error_reporting(0);
if(!isset($_COOKIE["username"])){
    header('location:login.php');

}
else{
    echo  $_COOKIE["username"];
    echo "<form method=post> <input type=submit value=logout name=logout></form>";

    if(isset($_POST["logout"])){
        setcookie( "username", "", time()- 3600);
        header('location:login.php');
}

}
?>



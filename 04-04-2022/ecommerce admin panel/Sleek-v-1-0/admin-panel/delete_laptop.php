<?php

$id = $_REQUEST['id'];


$con = mysqli_connect("localhost", "root", "" , "task3") or die("error in connection");
$query = mysqli_query($con, "delete from Laptop where Pid = '$id' ") or die("error in deleting");

if($query){
    echo header('location:laptop.php');

} else {
    echo "<script> alert('error in inserting);</script>";
}
mysqli_close($con);

?>

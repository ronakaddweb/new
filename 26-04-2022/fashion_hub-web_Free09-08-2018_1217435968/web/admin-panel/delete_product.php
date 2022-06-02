<?php

$id = $_REQUEST['id'];
$cname= $_REQUEST['name'];


$con = mysqli_connect("localhost", "root", "" , "task3") or die("error in connection");
$query = mysqli_query($con, "delete from $cname where Pid = '$id' ") or die("error in deleting");

if($query){
    header("location:products.php?name=$cname");

} else {
    echo "<script> alert('error in inserting);</script>";
}
mysqli_close($con);

?>

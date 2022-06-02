<?php
$id= $_REQUEST['id'];
    $con = mysqli_connect("localhost", "root", "" , "task3") or die("error in connection");
    $query = mysqli_query($con, "delete from Wishlist where Pid = $id") or die("error in deleting");
    header('location:wishlist_update.php');
    mysqli_close($con);

?>
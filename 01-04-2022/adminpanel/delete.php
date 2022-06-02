

<?php

    $id = $_REQUEST['Email'];
    

    $con = mysqli_connect("localhost", "root", "" , "task3") or die("error in connection");
    $query = mysqli_query($con, "delete from adminpanel where Email = '$id' ") or die("error in deleting");
    
    if($query){
        echo header('location:dashbord.php');

    } else {
        echo "<script> alert('error in inserting);</script>";
    }
    mysqli_close($con);


?>

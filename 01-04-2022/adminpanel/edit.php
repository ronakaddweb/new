 
<?php
error_reporting(0);
$a=$_REQUEST['Email'];


$con = mysqli_connect("localhost", "root", "" , "task3") or die("Erro in connection");
$query = mysqli_query($con, "select * from adminpanel where Email='$a'") or die("Error in query");

while($row = mysqli_fetch_array($query)){
    $n=$row['Name'];
    $u = $row['Mobile'];
    $e = $row['Email'];
    $add = $row['Address'];
    $pass = $row['Password'];
    // $comm = $_POST['comm'];
    // $dept = $_POST['dept'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
   <form method="POST">
       <input type='text' name='name' value ='<?php echo $n ?>'><br>
<input type='number' name='mobile' value='<?php echo $u ?>' ><br>
<input type='text' name='email' value='<?php echo $e ?>' ><br>
<input type='text' name='address' value='<?php echo $add ?>'><br>
<input type='text' name='password' value ='<?php echo $pass ?>'><br>
    <input type='submit' name='insert' value='Update'>

</form> 
</body>
</html>
<?php

// Update Code
if(isset($_POST['insert'])){
   
    $pname = $_REQUEST['name'];
    $pmobile = $_REQUEST['mobile'];
    $pemail = $_REQUEST['email'];
    $paddress = $_REQUEST['address'];
    

    $con = mysqli_connect("localhost", "root", "" , "task3") or die("error in connection");
    $demo= "update adminpanel set Name='$pname',Mobile= $pmobile, Address='$paddress' where Email='$pemail'";
    echo $demo;
    $query = mysqli_query($con, $demo) or die("error inn queery");
    
  
    
    if($query){
        header('location:dashbord.php');

    } else {
        echo "<script> alert('error in updating);</script>";
    }
    mysqli_close($con);
}

?>





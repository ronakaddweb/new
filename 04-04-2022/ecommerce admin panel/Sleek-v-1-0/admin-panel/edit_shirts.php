 
<?php
// error_reporting(0);
$a=$_REQUEST['id'];


$con = mysqli_connect("localhost", "root", "" , "task3") or die("Erro in connection");
$query = mysqli_query($con, "select * from Shirts") or die("Error in query");

while($row = mysqli_fetch_array($query)){
    $id=$row['Pid'];
    $brand = $row['Brand'];
    $color = $row['Color'];
    $size = $row['Size'];
    $type = $row['Type'];
    $quantity = $row['Quantity'];
    $discription = $row['Discription'];
    $image_path = $row['Image_path'];

    //$img = $row['Image_path'];
 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
   <form method="POST">
       <input type='text' name='pid' value ='<?php echo $id ?>'><br>
<input type='text' name='brand' value='<?php echo $brand ?>' ><br>
<input type='text' name='color' value ='<?php echo $color ?>'><br>
<input type='text' name='size' value='<?php echo $size ?>'><br>
<input type='text' name='type' value='<?php echo $type ?>' ><br>
<input type='text' name='quantity' value ='<?php echo $quantity ?>'><br>
<input type='text' name='discription' value ='<?php echo $discription ?>'><br>
<input type='text' name='image_path' value ='<?php echo $img ?>'><br>
    <input type='submit' name='insert' value='Update'>

</form> 
</body>
</html>
<?php

// Update Code
if(isset($_POST['insert'])){
   
    $pid = $_REQUEST['pid'];
    $pbrand = $_REQUEST['brand'];
    $pcolor = $_REQUEST['color'];
    $pisze = $_REQUEST['size'];
    $ptype = $_REQUEST['type'];
    $pquantity = $_REQUEST['quantity'];
    $pdiscription = $_REQUEST['discription'];
    $pimg = "images/" .$_FILES["files"]["name"];
    


    $con = mysqli_connect("localhost", "root", "" , "task3") or die("error in connection");
    $demo= "update Shirts set Brand= '$pbrand', Color='$pcolor', Size='$psize', Type='$type', Quantity='$quantity', Discription=$pdiscription, Image_path='$pimg' where pid = $pid";
    echo $demo;
    $query = mysqli_query($con, $demo) or die("error inn query");
    
  
    
    if($query){
        header('location:dashbord.php');

    } else {
        echo "<script> alert('error in updating);</script>";
    }
    mysqli_close($con);
}

?>

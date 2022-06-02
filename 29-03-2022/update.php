<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        ID:<input type="text" name= "id"> <br>
        Name: <input type="text" name="name"> <br>
    
        <input type="submit" name="update" value="insert">
    </form>
</body>
</html>

<?php
if(isset($_POST['update'])){
    $id = $_POST['id'];
    // $dept_no = $_POST['dept_no'];
    $name = $_POST['name'];
   

    $con = mysqli_connect("localhost", "root", "" , "task3") or die("error in connection");
    $demo = ;
    echo $demo;
    $query = mysqli_query("update Employee set Ename='$name' where id=$id") or die("error in queery");
    
  
    
    if($query){
        echo "<script> alert('data inserted');</script>";

    } else {
        echo "<script> alert('errorin inserting);</script>";
    }
    mysqli_close($con);
}

?>
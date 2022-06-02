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
    <input type="text" name="name" placeholder = "name"><br>
    <input type="text" name="username" placeholder = "username"><br>
    <input type="text" name="email" placeholder = "email"><br>
    <input type="text" name="address" placeholder="address"><br>
    <input type="password" name="password" placeholder="password"><br>
        <input type="submit" name="insert" value="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['insert'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];


    $con = mysqli_connect("localhost", "root", "" , "task3") or die("error in connection");
   
    $query = mysqli_query($con, "insert into adminpanel values('$name','$username','$email','$address','$password')" ) or die ("error in query");
    
    if($query){
      header('location:login.php');

    } else {
        echo "<script> alert('errorin inserting);</script>";
    }
    mysqli_close($con);
}

?>
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
    
    <input type="text" name="name" placeholder = "name" required><br>
    <input type="text" name="mobile" placeholder= "Mobile Number" required><br>
    <input type="email" name="email" placeholder = "email" required><br>
    <input type="text" name="address" placeholder="address" required><br>
    
    <input type="password" name="password" placeholder="password" required><br>
    <input type="password" name="cpassword" placeholder="Confirm Password"><br>
        <input type="submit" name="insert" value="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['insert'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];


    if ($_POST['password'] !== $_POST['cpassword']) {
        die('Password and Confirm password should match!');   
     }

    $con = mysqli_connect("localhost", "root", "" , "task3") or die("error in connection");
   
    $query = mysqli_query($con, "insert into adminpanel values('$name',$mobile  ,'$email','$address','$password')")  or die ("error in query");
    
    // if($query){
    //   header('location:login.php');
    if(isset($_POST['email'])){
        header('Location:dashbord.php');
    }
    else{
        header('Location:signup.php');
    }

    

   
    mysqli_close($con);
}

?>
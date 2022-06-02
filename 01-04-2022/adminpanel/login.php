<html>
	<head>
        <link rel="stylesheet" href="style.css">
		<body>
            <div class="main">
                <p class="login"> Login</p>

<form method="post" class="container">
Email <br><input class="em" type="text" name="email" placeholder = "email"><br><br>
Password <br><input class="pass" type="password" name="password" placeholder="password"><br><br>
<!-- <input type="checkbox" name="remember" id="remember" >Remember Me  -->
<input type="submit" value="login" name= "login" >

<div class=btn> <input type="submit" value="signup" name= "signup" ></div>

</div>
</form>
</body>
</head>
</html> 

<?php

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    setcookie("email",$_POST['email'] , time() + 3600);
    
   
   
    
    
$con=mysqli_connect("localhost","root","","task3") or die("Error in Connection");
$query=mysqli_query($con,"select * from adminpanel where email = '$email' and password='$password'") or die("Error in query");

$rows=mysqli_num_rows($query);
if($rows>0){
    
    header('location:dashbord.php');
}
else{
    // echo "Incorrect Username or password";
    echo "alert error";
}

mysqli_close($con);
}
if(isset($_POST['signup'])){
    header('location:signup.php');
}



?>
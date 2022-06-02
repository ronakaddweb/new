<html>
	<head>
		<body>
<form method="post">
<input type="text" name="username" placeholder = "username"><br>
<input type="password" name="password" placeholder="password"><br>
<!-- <input type="checkbox" name="remember" id="remember" >Remember Me  -->
<input type="submit" value="login" name= "login" >
<input type="submit" value="signup" name= "signup" >
</form>
</body>
</head>
</html> 


<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    session_start();
    $_SESSION['Username'] = $username;
    $_SESSION['password'] = $password;
    
    
$con=mysqli_connect("localhost","root","","task3") or die("Error in Connection");
$query=mysqli_query($con,"select * from adminpanel where username='$username' and password='$password'") or die("Error in query");

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
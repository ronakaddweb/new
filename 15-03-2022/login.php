<?php

if(isset($_REQUEST['login'])){
	setcookie ("username",$_POST["username"],time()+ 3600);
	header('location:login2.php');
	
}



?>
<html>
	<head>
		<body>
<form method="post">
<input type="text" name="username"  >
<input type="password" name="password" id="">
<!-- <input type="checkbox" name="remember" id="remember" >Remember Me  -->
<input type="submit" value="Login" name= "login" >
</form>
</body>
</head>
</html>
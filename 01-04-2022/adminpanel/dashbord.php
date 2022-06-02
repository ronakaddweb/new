<?Php
error_reporting(0);
$email =$_COOKIE['email'];


$con = mysqli_connect("localhost", "root", "" , "task3") or die("Erro in connection");
$query = mysqli_query($con, "select * from adminpanel where Email ='$email' ") or die("Error in query");
while($row = mysqli_fetch_array($query)){
	echo 'Hello '.$row["Name"]."<br><br>";
}



$query = mysqli_query($con, "select * from adminpanel") or die("Error in query");
echo "<table border = 2><tr><td>name</td> <td>mobile</td><td>email</td><td>address</td><td>edit</td><td>delete</td></tr>";
while($row = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$row["Name"]."</td>";
    echo "<td>".$row["Mobile"]."</td>";
	$mail=$row["Email"];
    echo "<td>".$mail."</td>";
	echo "<td>".$row["Address"]."</td>";
	echo "<td><a href=edit.php?Email=$mail>Edit</a></td>";
	echo "<td><a href=delete.php?Email=$mail>delete</a></td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);


echo "<form method='post'>
<input type='submit' value='Add User', name ='add'>
</form>";

if(isset($_POST['add'])){
    header('location:signup.php');
}

echo "<form method='post'>
<input type='submit' value='Logout', name ='logout'>
</form>";

if(isset($_POST['logout'])){
    header('location:login.php');
}


?>
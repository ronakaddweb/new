<?Php
error_reporting(0);
$username =$_SESSION['Username'];

// echo "fggg". $username;
$con = mysqli_connect("localhost", "root", "" , "task3") or die("Erro in connection");
$query = mysqli_query($con, "select * from adminpanel where Username ='$username' ") or die("Error in query");
while($row = mysqli_fetch_array($query)){
	echo 'Hello '.$row["Name"]."<br><br>";
}



$query = mysqli_query($con, "select * from adminpanel") or die("Error in query");
echo "<table border = 2><tr><td>name</td> <td>username</td><td>email</td><td>address</td><td>edit</td><td>delete</td></tr>";
while($row = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$row["Name"]."</td>";
    echo "<td>".$row["Username"]."</td>";
	$mail=$row["Email"];
    echo "<td>".$mail."</td>";
	echo "<td>".$row["Address"]."</td>";
	echo "<td><a href=edit.php?Email=$mail>Edit</a></td>";
	echo "<td><a href=delete.php?Email=$mail>delete</a></td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);



?>
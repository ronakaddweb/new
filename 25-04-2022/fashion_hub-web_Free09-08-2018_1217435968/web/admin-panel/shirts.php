<?Php
// error_reporting(0);
// include('header-footer.php');
echo "<h1>Shirts Details</h1>";


$con = mysqli_connect("localhost", "root", "" , "task3") or die("Erro in connection");
$query = mysqli_query($con, "select * from Shirts") or die("Error in query");

// $query = mysqli_query($con, "select * from adminpanel") or die("Error in query");
echo "<table border = 2><tr><td>Pid</td> <td>Brand</td><td>Color</td><td>Size</td><td>Type</td><td>Quantity</td><td>Disciption</td><td>Image_path</td><td>Edit</td><td>Delete</td></tr>";
while($row = mysqli_fetch_array($query)){
    $id = $row["Pid"];
    echo "<tr>";
    echo "<td>".$row["Pid"]."</td>";
    echo "<td>".$row["Brand"]."</td>";
    echo "<td>".$row["Color"]."</td>";
    echo "<td>".$row["Size"]."</td>";
    echo "<td>".$row["Type"]."</td>";
    echo "<td>".$row["Quantity"]."</td>";
    echo "<td>".$row["Discription"]."</td>";
    echo "<td>"."<img src=".$row["Image_path"]." height=100px width=100px></td>"; 
	echo "<td><a href=edit_shirts.php?id=$id</a>Edit</td>";
	echo "<td><a href=delete_shirts.php?id=$id>delete</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<form method='post'>
<input type='submit' value='Add Product', name ='add'>
</form>";

if(isset($_POST['add'])){
    header('Location:add_shirts.php');
}


?>
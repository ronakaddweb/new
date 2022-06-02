<?php
// include('includeheader.php');
error_reporting(0);
ob_start();
$id=$_REQUEST['id'];
$brand=$_REQUEST['brand'];
$name=$_REQUEST['name'];
$img=$_REQUEST['img'];
// $email =$_REQUEST['email'];
$price = $_REQUEST['price'];


try {
$conn = new PDO("mysql:host=localhost; dbname=task3", "root", "");

$sql1 = "insert into Cart(id, Brand, Name, Image_path, Price) values(:id,:Brand, :Name, :Image_path,:Price)";
$query = $conn -> prepare($sql1);
$query -> bindParam(':id', $id, PDO::PARAM_STR);
$query -> bindParam(':Image_path', $img, PDO::PARAM_STR);
$query -> bindParam(':Price', $price, PDO::PARAM_STR);
$query -> bindParam(':Brand', $brand, PDO::PARAM_STR);
$query -> bindParam(':Name', $name, PDO::PARAM_STR);
// $query -> bindParam(':Email', $email, PDO::PARAM_STR);

// echo $query;
$query -> execute();
if($name=='Laptop'){
header('Location:laptop.php');
}
if($name=='Mobile'){
header('Location:mobile.php');
}
if($name=='Shoes'){
header('Location:shoes.php');
}
if($name=='Watch'){
header('Location:watch.php');
}

if($name=='Tablet'){
header('Location:tablet.php');
}



}
catch (PDOException $e) {
die("Could not connect to the database :" . $e->getMessage());
}
?>
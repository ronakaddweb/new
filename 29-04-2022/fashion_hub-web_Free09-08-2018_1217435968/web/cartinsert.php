<?php
// include('includeheader.php');
// error_reporting(0);
ob_start();
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];


try {
    $conn = new PDO("mysql:host=localhost; dbname=task3", "root", "");
    $sql = "select * from $name where Pid=$id";

    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $q->fetch()) {
        $name = $row['Name'];
        $id = $row['Pid'];
        $price = $row['Price'];
        $img = $row['Image_path'];
        $brand = $row['Brand'];

    }
        $sql1 = "insert into Cart(Pid, Brand, Name, Email, Image_path, Price) values(:Pid,:Brand, :Name, :Email, :Image_path,:Price)";
        $query = $conn->prepare($sql1);
        $query->bindParam(':Pid', $id, PDO::PARAM_STR);
        $query->bindParam(':Image_path', $img, PDO::PARAM_STR);
        $query->bindParam(':Price', $price, PDO::PARAM_STR);
        $query->bindParam(':Brand', $brand, PDO::PARAM_STR);
        $query->bindParam(':Name', $name, PDO::PARAM_STR);
        $query -> bindParam(':Email', $email, PDO::PARAM_STR);

        // echo $query;
        $query->execute();
        if($name) {
            header('Location:viewcart.php');
        
    }
} catch (PDOException $e) {
    die("Could not connect to the database :" . $e->getMessage());
}
?>
<?php
// error_reporting(0);
ob_start();
session_start();
$email = $_SESSION['email'];
$name = $_SESSION['name'];
?>

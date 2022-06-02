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
        ID:<input type="text" name= "id"> <br>
        
        <input type="submit" name="delete" value="delete">
    </form>
</body>
</html>
$id = 
<?php
if(isset($_POST['delete'])){
    $id = $_POST['id'];
    

    $con = mysqli_connect("localhost", "root", "" , "task3") or die("error in connection");
    $query = mysqli_query($con, "delete from Employee where id = $id ") or die("error in deleting");
    
    if($query){
        echo "<script> alert('data inserted');</script>";

    } else {
        echo "<script> alert('errorin inserting);</script>";
    }
    mysqli_close($con);
}

?>
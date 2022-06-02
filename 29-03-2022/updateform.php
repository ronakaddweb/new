<?php
$id=2;
$con=mysqli_connect("localhost","root","","task3") or die("Error in Connection");
$query=mysqli_query($con,"select * from Employee where id=$id") or die("Error in query");
while($row=mysqli_fetch_array($query))
{
    $sid=$row["id"];
    $sname=$row["Ename"];
    $ssalary=$row["E_salary"];
  
}
mysqli_close($con);
?>




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
        ID:<input type="text" name= "id" value="<?php echo $sid ?>"> <br>
        <!-- dept no: <input type="text" name = "dept_no"><br>  -->
        Name: <input type="text" name="name" value="<?php echo $sname ?>"> <br>
     <!-- date <input type="text" name="date"><br> -->
        salary : <input type="text" name="salary" value="<?php echo $ssalary ?>"> <br>
        <input type="submit" name="update" value="insert">
    </form>
</body>
</html>

<?php
if(isset($_POST['update'])){
    $pid = $_POST['id'];
    // $dept_no = $_POST['dept_no'];
    $pname = $_POST['name'];
    // $date = $_POST['date'];
    $psalary = $_POST['salary'];
    // $job = $_POST['job'];
    // $comm = $_POST['comm'];
    // $dept = $_POST['dept'];

    $con = mysqli_connect("localhost", "root", "" , "task3") or die("error in connection");
    
    $query = mysqli_query($con, "update Employee set Ename='$pname', E_salary = $psalary where id=$pid") or die("error in queery");
    
  
    
    if($query){
        echo "<script> alert('data updated');</script>";

    } else {
        echo "<script> alert('error in updating);</script>";
    }
    mysqli_close($con);
}

?>
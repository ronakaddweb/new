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
        dept no: <input type="text" name = "dept_no"><br>
        Name: <input type="text" name="name"> <br>
        date <input type="text" name="date"><br>
        salary : <input type="text" name="salary"> <br>
        Job : <input type="text" name="job" ><br>
        commission : <input type="text" name="comm" ><br>
        department : <input type="text" name="dept" ><br>
        <input type="submit" name="insert" value="insert">
    </form>
</body>
</html>

<?php
if(isset($_POST['insert'])){
    $id = $_POST['id'];
    $dept_no = $_POST['dept_no'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $salary = $_POST['salary'];
    $job = $_POST['job'];
    $comm = $_POST['comm'];
    $dept = $_POST['dept'];

    $con = mysqli_connect("localhost", "root", "" , "task3") or die("error in connection");
   
    $query = mysqli_query($con, "insert into Employee values($id,$dept_no,'$name','$date', $salary, '$job', $comm, '$dept')" ) or die ("error in query");
    
    if($query){
        echo "<script> alert('data inserted');</script>";

    } else {
        echo "<script> alert('errorin inserting);</script>";
    }
    mysqli_close($con);
}

?>
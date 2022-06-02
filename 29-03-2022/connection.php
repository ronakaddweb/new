<?Php
$con = mysqli_connect("localhost", "root", "" , "task3") or die("Erro in connection");
$query = mysqli_query($con, "select * from Employee") or die("Error in query");
echo "<table border = 2><tr><td>ID</td> <td>name</td><td>Date</td></tr>";
while($row = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["Ename"]."</td>";
    echo "<td>".$row["Joining_Date"]."</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);



?>
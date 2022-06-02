<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="fval" id="">
        Second value:<input type="text" name="sval" /><br/><br/>
        <input type="submit" name="Add" value="Add" />
        <input type="submit" name="Subtract" value="subtract" />
        <input type="submit" name="Multiply" value="multiply" />
    </form>
</body>
</html>

<?php
if(isset($_REQUEST['Add'])){
    $a = $_REQUEST['fval'];
    $b = $_REQUEST['sval'];
    $c = $a+ $b;
    echo "Total is : " .$c;
}
if(isset($_REQUEST['Subtract'])){
    $a = $_REQUEST['fval'];
    $b = $_REQUEST['sval'];
    $c = $a - $b;
    echo "Total is : " .$c;
}
if(isset($_REQUEST['Multiply'])){
    $a = $_REQUEST['fval'];
    $b = $_REQUEST['sval'];
    $c = $a* $b;
    echo "Total is : " .$c;
}
?>

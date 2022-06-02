<?php
$username = $_GET['username']??'not passed';
print($username);
print("<br/>");

$username = isset($_GET['username']) ? $_GET['username'] : 'not passed';
   print($username);
   print("<br/>");
   
   $username = $_GET['username'] ?? $_POST['username'] ?? 'not passed';
   print($username);

?>
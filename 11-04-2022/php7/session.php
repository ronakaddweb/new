<?php
$var = session_start(['cache_limiter' => 'private', 'read_and_close' => true,]);
print $var;
?>
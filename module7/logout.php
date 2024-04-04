<?php 
session_start();
$_SESSION = array();
session_destroy();
header("location:practice1.php/");
exit();
?>
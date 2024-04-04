<?php
// cookies
$cookies_name = "root";
$cookies_value = $_POST['txtid'];
setcookie($cookies_name, $cookies_value, time()+60,"/");

if(!isset($_COOKIE[$cookies_name])){
    echo "cookies not set";
} else {
    echo "cookies " . $cookies_value . " is set";
}
//session
session_start();

if(($_POST['txtid']==="root")&&($_POST['txtsandi']==="root")){
    $session_user = $_POST['txtid'];
    $session_password= $_POST['txtsandi'];
    header('location:../module5/integration/admin/form_input.php');
} else {
    echo "Login gagal";
}
?>
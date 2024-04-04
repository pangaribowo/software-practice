<?php
session_start();

// Form submission handling
if(isset($_POST['btnlogin'])) {
    $username = $_POST['txtid'];
    $password = $_POST['txtsandi'];

    // Dummy authentication, replace with actual authentication logic
    if($username === "root" && $password === "root") {
        // Set session
        $_SESSION['user'] = $username;
        
        // Set cookies
        $cookies_name = "root";
        $cookies_value = $username;
        setcookie($cookies_name, $cookies_value, time()+60,"/");
        
        // Redirect to dashboard
        header('location:../admin/dashboard.php');
        exit(); // Make sure to exit after redirect
    } else {
        // If login fails
        echo "Login gagal";
    }
}

// // cookies
// $cookies_name = "root";
// $cookies_value = $_POST['txtid'];
// setcookie($cookies_name, $cookies_value, time()+60,"/");

// if(!isset($_COOKIE[$cookies_name])){
//     echo "cookies not set";
// } else {
//     echo "cookies " . $cookies_value . " is set";
// }
// //session
// session_start();

// if(($_POST['txtid']==="root")&&($_POST['txtsandi']==="root")){
//     $session_user = $_POST['txtid'];
//     $session_password= $_POST['txtsandi'];
//     header('location:../admin/dashboard.php');
// } else {
//     echo "Login gagal";
// }
?>
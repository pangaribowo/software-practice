<?php 

session_start();

if (!isset($_SESSION['user'])) {
    header("location:../cookies/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../css/style_login.css">
</head>
<body>
    <div id="app" class="container">
        <nav>
            <ul class="menu">
                <li><a href="form_display.php">Kelola Data</a></li>
                <li><a href="form_input.php">Tambah Data</a></li>
                <li><a href="../cookies/logout.php">Logout</a></li>
            </ul>
        </nav>
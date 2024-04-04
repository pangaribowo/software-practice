<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "MyDB";

// Membuat koneksi ke MySQL
$conn = new mysqli($servername, $username, $password);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Membuat database jika belum ada
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists";
} else {
    echo "Error creating database: " . $conn->error;
}

// Tutup koneksi
$conn->close();
?>

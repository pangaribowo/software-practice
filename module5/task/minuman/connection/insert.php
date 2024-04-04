<?php
// Include file koneksi database
include 'connection.php';

// Menyimpan data yang diterima dari formulir ke dalam variabel PHP
$nomor = $_POST['nomor'];
$nama = $_POST['nama'];
$bahan = $_POST['bahan'];
$target_img = $img_dir . basename($_FILES["fileToUpload"]["name"]);

// Eksekusi pernyataan SQL untuk menyimpan data ke dalam tabel database
$sql = "INSERT INTO Minuman (kd_minuman, nm_minuman, bahan_minuman, foto_minuman) 
        VALUES ('$nomor', '$nama', '$bahan', '$target_img')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>

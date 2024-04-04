<?php
// Include file koneksi database
include 'connection.php';

// Menyimpan data yang diterima dari formulir ke dalam variabel PHP
$nim = $_POST['stud_num'];
$nama = $_POST['name'];
$jk = ($_POST['gender'] == 'm') ? "Male" : "Female";
$jur = $_POST['trymajor'];
$tgl_lahir = $_POST['date'];
$email = $_POST['email'];
$target_img = $img_dir . basename($_FILES["fileToUpload"]["name"]);
$target_pdf = $pdf_dir . basename($_FILES["pdfToUpload"]["name"]);

// Eksekusi pernyataan SQL untuk menyimpan data ke dalam tabel database
$sql = "INSERT INTO Tamu (nim, nama, jk, jurusan, tgl_lahir, email, foto, file_pdf) 
        VALUES ('$nim', '$nama', '$jk', '$jur', '$tgl_lahir', '$email', '$target_img', '$target_pdf')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>

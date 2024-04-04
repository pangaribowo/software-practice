<?php
// Include file koneksi database
include '../connection/connection.php';

// Menyimpan data yang diterima dari formulir ke dalam variabel PHP
$nim = $_POST['stud_num'];
$nama = $_POST['name'];
$jk = ($_POST['gender'] == 'm') ? "Male" : "Female";
$jur = $_POST['trymajor'];
$tgl_lahir = $_POST['date'];
$email = $_POST['email'];

// Inisialisasi variabel target untuk nama file gambar dan PDF
$target_img = "";
$target_pdf = "";

// Cek apakah ada file gambar yang diunggah
if(isset($_FILES["fileToUpload"]["name"]) && !empty($_FILES["fileToUpload"]["name"])) {
    $target_img = $img_dir . basename($_FILES["fileToUpload"]["name"]);
}

// Cek apakah ada file PDF yang diunggah
if(isset($_FILES["pdfToUpload"]["name"]) && !empty($_FILES["pdfToUpload"]["name"])) {
    $target_pdf = $pdf_dir . basename($_FILES["pdfToUpload"]["name"]);
}

// Jika ada file gambar atau PDF yang diunggah, lakukan proses upload
if(!empty($target_img) || !empty($target_pdf)) {
    // Lakukan proses upload gambar jika ada
    if(!empty($target_img)) {
    }
    
    // Lakukan proses upload PDF jika ada
    if(!empty($target_pdf)) {
    }
}

// Lakukan proses update data ke database
$sql = "UPDATE Tamu SET 
        nama = '$nama', 
        jk = '$jk', 
        jurusan = '$jur', 
        tgl_lahir = '$tgl_lahir', 
        email = '$email'";

// Jika ada file gambar yang diunggah, tambahkan nama file ke query update
if(!empty($target_img)) {
    $sql .= ", foto = '$target_img'";
}

// Jika ada file PDF yang diunggah, tambahkan nama file ke query update
if(!empty($target_pdf)) {
    $sql .= ", file_pdf = '$target_pdf'";
}

$sql .= " WHERE nim = '$nim'";

// Eksekusi pernyataan SQL untuk melakukan update data di database
if($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

// include '../connection/connection.php';

// $sql2 = "UPDATE Tamu SET nama='" . $_POST['name'] . "', jk='" . $_POST['gender'] . "', jurusan='" . $_POST['trymajor'] . "', tgl_lahir='" . $_POST['date'] . "', email='" . $_POST['email'] . "' WHERE nim='" . $_POST['stud_num'] . "'";
// if($conn->query($sql2)===TRUE){
//     echo "Record updated successfully";
// } else {
//     echo "Error updating record: " . $conn->error;
// }
?>

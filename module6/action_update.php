<?php

include '../module5/practice/connection.php';

$sql2 = "UPDATE Tamu SET nama='" . $_POST['name'] . "', jk='" . $_POST['gender'] . "', jurusan='" . $_POST['trymajor'] . "', tgl_lahir='" . $_POST['date'] . "', email='" . $_POST['email'] . "' WHERE nim='" .$_POST['stud_num'] . "'";
if($conn->query($sql2)===TRUE){
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

// include '../module5/practice/connection.php';

// // Validasi dan pembersihan data (contoh sederhana)
// $nama = isset($_POST['name']) ? $_POST['name'] : '';
// $jk = isset($_POST['gender']) ? $_POST['gender'] : '';
// $jur = isset($_POST['trymajor']) ? $_POST['trymajor'] : '';
// $tgl_lahir = isset($_POST['date']) ? $_POST['date'] : '';
// $email = isset($_POST['email']) ? $_POST['email'] : '';
// $nim = isset($_POST['stud_num']) ? $_POST['stud_num'] : '';

// // Prepare and bind statement
// $sql = "UPDATE Tamu SET nama=?, jk=?, jurusan=?, tgl_lahir=?, email=? WHERE nim=?";
// $stmt = $conn->prepare($sql);
// $stmt->bind_param("sssss", $nama, $jk, $jur, $tgl_lahir, $email, $nim);

// // Execute statement
// if ($stmt->execute()) {
//     echo "Record updated successfully";
// } else {
//     echo "Error updating record: " . $stmt->error;
// }

// // Tutup prepared statement
// $stmt->close();
// // Tutup koneksi
// $conn->close();
?>

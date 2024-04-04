<?php
include 'connection.php';

$sql="INSERT INTO Tamu(nim, nama, jk, jurusan, tgl_lahir, email, foto, file_pdf) VALUES('".$nim."','".$name."','".$_POST['gender']."','".$major."','".$date."','".$email."','".$target_img."','".$target_file."','a')";
if($conn->query($sql)===TRUE){
echo "New Record create successfully";    
} else {
    echo "Error : " . $sql. "<br>" . $conn->error;
}
$conn->close();
?>
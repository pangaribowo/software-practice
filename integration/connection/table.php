<?php
include 'connection.php';

$databasename="MyDB";
$sql_select_db="SELECT DATABASE()";
if($conn->query($sql_select_db)!==NULL){
    echo "Database Exist";
} else {
    $sql="CREATE DATABASE MyDB";
    if($conn->query($sql)===TRUE){
    echo "Database created Successfully";
} else {
    echo "Error Creating Database : " . $conn->error;
}
}
$sql2 = "CREATE TABLE Tamu(
    nim varchar(12) PRIMARY KEY,
    nama VARCHAR(50),
    jk ENUM('P', 'W'),
    jurusan VARCHAR(3),
    tgl_lahir DATE,
    email VARCHAR(100),
    foto VARCHAR(100),
    file_pdf VARCHAR(100)
)";


if($conn->query($sql2)===TRUE){
    echo "Table create successfully";
} else {
    echo "Error Creating Table :" . $conn->error;
}

// Perbarui tipe data kolom 'jk' menjadi VARCHAR(6)
$sql_alter_table = "ALTER TABLE Tamu MODIFY COLUMN jk VARCHAR(6)";
if ($conn->query($sql_alter_table) === TRUE) {
    echo "Column 'jk' updated successfully";
} else {
    echo "Error updating column 'jk': " . $conn->error;
}

$conn->close();
?>
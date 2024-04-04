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
$sql2="CREATE TABLE Tamu(nim varchar(12) PRIMARY KEY, nama VARCHAR(50), jk ENUM('P', 'W'), jurusan INT(3), tgl_lahir DATE, 
email VARCHAR(100), file_pdf VARCHAR(100))";

if($conn->query($sql2)===TRUE){
    echo "Table create successfully";
} else {
    echo "Error Creating Table :" . $conn->error;
}
$conn->close();
?>
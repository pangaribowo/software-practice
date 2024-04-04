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

$sql2 = "CREATE TABLE Minuman(
    kd_minuman varchar(10) PRIMARY KEY,
    nm_minuman VARCHAR(30),
    bahan_minuman text,
    foto_minuman VARCHAR(100)
)";

if($conn->query($sql2)===TRUE){
    echo "Table create successfully";
} else {
    echo "Error Creating Table :" . $conn->error;
}

$conn->close();
?>
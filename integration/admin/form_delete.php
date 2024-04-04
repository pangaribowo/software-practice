<?php
include '../connection/connection.php';

$nim = $_GET['id'];
$sql = "DELETE FROM Tamu WHERE nim='" . $nim . "'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

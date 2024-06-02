<?php 

session_start();

if (!isset($_SESSION['user'])) {
    header("location:../admin/dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tamu</title>
    <link rel="stylesheet" type="text/css" href="../css/style_display.css">
</head>
<body>
    <?php
    include '../connection/connection.php';

    $sql = "SELECT * FROM Tamu";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>NIM</th><th>Nama</th><th>Jenis Kelamin</th><th>Jurusan</th><th>Tanggal Lahir</th><th>Email</th><th>Foto</th><th>PDF</th><th>Aksi</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["nim"] . "</td>";
            echo "<td>" . $row["nama"] . "</td>";
            echo "<td>" . $row["jk"] . "</td>";
            echo "<td>" . $row["jurusan"] . "</td>";
            echo "<td>" . $row["tgl_lahir"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td><img src='" . $row["foto"] . "' style='max-width:100px;'></td>";
            echo "<td><a href='" . $row["file_pdf"] . "'>Lihat PDF</a></td>";
            // echo "<td>" . $row["foto"] . "</td>";
            // echo "<td>" . $row["file_pdf"] . "</td>";
            echo "<td>";
            echo "<button class='btn-edit' onclick='editData(\"" . $row['nim'] . "\")'>Edit</button>";
            echo "<button class='btn-delete' onclick='deleteData(\"" . $row['nim'] . "\")'>Hapus</button>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada data.";
    }

    $conn->close();
    ?>
    <div class="button-container">
        <table class="button-table">
            <tr>
                <td><a href="form_input.php" class="btn-input">Input Data</a></td>
                <td><a href="dashboard.php" class="btn-back">Dashboard</a></td>
            </tr>
        </table>
    </div>
    <script src="../js/script_display.js"></script>
</body>
</html>


<!-- table -->
<?php
// include '../connection/connection.php';

// $sql = "SELECT * FROM Tamu";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     echo "<table border='1'>";
//     echo "<tr><th>NIM</th><th>Nama</th><th>Jenis Kelamin</th><th>Jurusan</th><th>Tanggal Lahir</th><th>Email</th><th>Foto</th><th>PDF</th><th>Aksi</th></tr>";
//     while($row = $result->fetch_assoc()) {
//         echo "<tr>";
//         echo "<td>" . $row["nim"] . "</td>";
//         echo "<td>" . $row["nama"] . "</td>";
//         echo "<td>" . $row["jk"] . "</td>";
//         echo "<td>" . $row["jurusan"] . "</td>";
//         echo "<td>" . $row["tgl_lahir"] . "</td>";
//         echo "<td>" . $row["email"] . "</td>";
//         echo "<td>" . $row["foto"] . "</td>";
//         echo "<td>" . $row["file_pdf"] . "</td>";
//         echo "<td><a href='form_update.php?id=" . $row['nim'] . "' id='edit'>Edit</a> &nbsp;";
//         echo "<a href='form_delete.php?id=" . $row['nim'] . "' id='hapus'>Hapus</a></td>";
//         echo "</tr>";
//     }
//     echo "</table>";
// } else {
//     echo "Tidak ada data.";
// }

// $conn->close();
?>

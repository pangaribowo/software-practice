<?php
include '../module5/practice/connection.php';

$sql = "SELECT * FROM Tamu";
$result = $conn->query($sql);
while($row=$result->fetch_assoc()){
    echo "<pre>";
    echo "NIM           : " . $row["nim"] . "\n";
    echo "Nama          : " . $row["nama"] . "\n";
    echo "Jenis Kelamin : " . $row["jk"] . "\n";
    echo "Jurusan       : " . $row["jurusan"] . "\n";
    echo "Tanggal Lahir : " . $row["tgl_lahir"] . "\n";
    echo "Email         : " . $row["email"] . "\n";
    echo "Foto          : " . $row["foto"] . "\n";
    echo "<a href = 'form_update.php?id=$row[nim]' id='edit'>Edit</a> &nbsp";
    echo "<a href = 'form_hapus.php?id=$row[nim]' id='edit'>Hapus</a>";
}
$conn->close();
?>

<!-- table -->
<?php
include '../module5/practice/connection.php';

$sql = "SELECT * FROM Tamu";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>NIM</th><th>Nama</th><th>Jenis Kelamin</th><th>Jurusan</th><th>Tanggal Lahir</th><th>Email</th><th>Foto</th><th>Aksi</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nim"] . "</td>";
        echo "<td>" . $row["nama"] . "</td>";
        echo "<td>" . $row["jk"] . "</td>";
        echo "<td>" . $row["jurusan"] . "</td>";
        echo "<td>" . $row["tgl_lahir"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["foto"] . "</td>";
        echo "<td><a href='form_update.php?id=" . $row['nim'] . "' id='edit'>Edit</a> &nbsp;";
        echo "<a href='form_hapus.php?id=" . $row['nim'] . "' id='hapus'>Hapus</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data.";
}

$conn->close();
?>

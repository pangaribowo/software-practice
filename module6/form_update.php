<?php
include '../module5/practice/connection.php';

$nim = $_GET['id'];
$sql = "SELECT * FROM Tamu Where nim='" . $nim ."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<form action="action_update.php" method="post" enctype="multipart/form-data">
    <table style="width: 80%">
        <tr>
            <td colspan="3"><h3 align="center">Input Data Mahasiswa</h3></td>
        </tr>
        <tr>
            <td>No Mahasiswa</td> <td>:</td> <td><input type="text" name="stud_num" size="15" value="<?php echo $row["nim"]; ?>"></td>
        </tr>
        <tr>
            <td>Nama Mahasiswa</td> <td>:</td> <td><input type="text" name="name" size="30" value="<?php echo $row["nama"]; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td> <td>:</td> <td>
                <input type="radio" name="gender" value="M" <?php echo ($row["jk"] === "P") ? "checked" : ""; ?>> Pria
                <input type="radio" name="gender" value="F" <?php echo ($row["jk"] === "W") ? "checked" : ""; ?>> Wanita
            </td>
        </tr>
        <tr>
            <td>Jurusan</td> <td>:</td>
            <td>
                <select name="trymajor">
                    <option value="TM" <?php echo ($row["jurusan"] === "TM") ? "selected" : ""; ?>>Teknik Mesin</option>
                    <option value="TI" <?php echo ($row["jurusan"] === "TI") ? "selected" : ""; ?>>Teknik Industri</option>
                    <option value="TF" <?php echo ($row["jurusan"] === "TF") ? "selected" : ""; ?>>Informatika</option>
                    <option value="TP" <?php echo ($row["jurusan"] === "TP") ? "selected" : ""; ?>>Teknik Penerbangan</option>
                    <option value="TE" <?php echo ($row["jurusan"] === "TE") ? "selected" : ""; ?>>Teknik Elektro</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td> <td>:</td> <td><input type="date" name="date" value="<?php echo $row["tgl_lahir"]; ?>"></td>
        </tr>
        <tr>
            <td>Email</td> <td>:</td> <td><input type="email" name="email" value="<?php echo $row["email"]; ?>"></td>
        </tr>
        <tr>
            <td>Upload Foto</td> <td>:</td> <td><img src="<?php echo $row["foto"]; ?>" width=50 height=50><input type="file" name="fileToUpload" id="fileToUpload"><td>
        </tr>
        <tr>
            <td colspan="3" align="right"><input type="submit" name="simpan" value="Edit"></td>
        </tr>
    </table>
</form>

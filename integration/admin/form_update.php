<?php
include '../connection/connection.php';

$nim = $_GET['id'];
$sql = "SELECT * FROM Tamu WHERE nim='" . $nim ."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Student Data</title>
    <link rel="stylesheet" type="text/css" href="../css/style_update.css">
</head>
<body>
    <div class="container">
        <form action="action_update.php" method="post" enctype="multipart/form-data">
            <div class="form-container">
                <h3 class="form-title">Input Data Mahasiswa</h3>
                <table>
                    <tr>
                        <td>No Mahasiswa:</td>
                        <td><input type="text" name="stud_num" size="15" value="<?php echo $row["nim"]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Mahasiswa:</td>
                        <td><input type="text" name="name" size="30" value="<?php echo $row["nama"]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin:</td>
                        <td>
                            <input type="radio" name="gender" value="Male" <?php echo ($row["jk"] === "P") ? "checked" : ""; ?>> Pria
                            <input type="radio" name="gender" value="Female" <?php echo ($row["jk"] === "W") ? "checked" : ""; ?>> Wanita
                        </td>
                    </tr>
                    <tr>
                        <td>Jurusan:</td>
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
                        <td>Tanggal Lahir:</td>
                        <td><input type="date" name="date" value="<?php echo $row["tgl_lahir"]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email" value="<?php echo $row["email"]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Upload Foto:</td>
                        <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                    </tr>
                    <tr>
                        <td>Upload PDF:</td>
                        <td><input type="file" name="pdfToUpload" id="pdfToUpload"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right"><input type="submit" name="simpan" value="Edit"></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</body>
</html>

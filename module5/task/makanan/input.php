<html>
    <head>
        <title> Galeri Makanan </title>
        <style>
            table, th, td {
                border-collapse: collapse;
            }
            th, td {
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <img src="assets/makan.png" alt="dbase" width="75" height="75">
        <form action="be_output.php" method="post" enctype="multipart/form-data">
            <table style="width: 80%;">
                <tr>
                    <td colspan="3"><h3 align="center">Masukan Data Makanan</h3></td>
                </tr>
                <tr>
                    <td>No Makanan</td><td>:</td><td><input type="text" name="nomor" size="15"></td>
                </tr>
                <tr>
                    <td>Nama Makanan</td><td>:</td><td><input type="text" name="nama" size="30"></td>
                </tr>
                <tr>
                    <td>Bahan Pembuatan</td><td>:</td><td><input type="text" name="bahan" size="30"></td>
                </tr>
                <tr>
                    <td>Unggah Foto</td> <td>:</td> <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                </tr>
                <tr>
                    <td colspan="3" align="right"><input type="submit" name="save" value="process">
                    <input type="reset" id="reset" value="reset"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

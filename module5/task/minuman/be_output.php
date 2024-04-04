<?php
$nomor = $_POST['nomor'];
$nama = $_POST['nama'];
$bahan = $_POST['bahan'];

// Upload image file
$img_dir = "img/";
$target_img = $img_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadImgOk = 1;
$imgFileType = strtolower(pathinfo($target_img, PATHINFO_EXTENSION));

// Check if image file is a valid image
if (isset($_POST["submit"])) {
    $checkImg = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($checkImg !== false) {
        echo "File is an image - " . $checkImg["mime"] . ".";
        $uploadImgOk = 1;
    } else {
        echo "File is not an image.";
        $uploadImgOk = 0;
    }
}

// Check if image file already exists
if (file_exists($target_img)) {
    echo "Sorry, image file already exists.";
    $uploadImgOk = 0;
}

// Check image file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your image file is too large.";
    $uploadImgOk = 0;
}

// Allow only specific image file formats
if ($imgFileType != "jpg" && $imgFileType != "png" && $imgFileType != "jpeg" && $imgFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG, & GIF image files are allowed.";
    $uploadImgOk = 0;
}

// Check if $uploadImgOk is set to 0 by an error
if ($uploadImgOk == 0) {
    echo "Sorry, your image file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_img)) {
        echo "The image file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your image file.";
    }
}
?>

<html>
    <img src="assets/minum.png" alt="dbase" width="75" height="75">
    <form action="action_form.php" method="post" enctype="multipart/form-data">
        <table style="width: 80%;">
            <tr>
                <td colspan="3"><h3 align="center">Info Minuman</h3></td>
            </tr>
            <tr>
                <td>Nomor</td><td>:</td><td><?php echo $nomor;?></td>
            </tr>
            <tr>
                <td>Nama Minuman</td><td>:</td><td><?php echo $nama;?></td>
            </tr>
            <tr>
                <td>Bahan</td><td>:</td><td><?php echo $bahan;?></td>
            </tr>
            <!-- Tampilkan gambar -->
            <tr>
                <td colspan="3"><img src="<?php echo $target_img; ?>" alt="hasil"></td>
            </tr>
            <!-- Tautan unduh gambar -->
            <tr>
                <td colspan="3">
                    <a href="<?php echo $target_img; ?>" download>Download Gambar</a>
                </td>
            </tr>
        </table>
    </form>
</html>

<?php
// Include file koneksi database
include 'connection/connection.php';

// Menyimpan data yang diterima dari formulir ke dalam variabel PHP
$nomor = $_POST['nomor'];
$nama = $_POST['nama'];
$bahan = $_POST['bahan'];
$target_img = $img_dir . basename($_FILES["fileToUpload"]["name"]);

// Eksekusi pernyataan SQL untuk menyimpan data ke dalam tabel database
$sql = "INSERT INTO Minuman (kd_minuman, nm_minuman, bahan_minuman, foto_minuman) 
        VALUES ('$nomor', '$nama', '$bahan', '$target_img')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
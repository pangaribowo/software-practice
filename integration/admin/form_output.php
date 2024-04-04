<?php
session_start();

if(!isset($_SESSION['user'])) {
    header('location: form_input.php');
    exit; // Stop script execution after redirecting the user
}

// Check if form data has been submitted
if(isset($_POST['save'])) {
    // Validate form data
    $errors = array();

    $nim = $_POST['stud_num'];
    $nama = $_POST['name'];
    $email = $_POST['email'];

    if(empty($nim) || empty($nama) || empty($email)) {
        $errors[] = "!: Please fill in all required fields.";
    }

    // If there are no errors, proceed with data saving process
    if(empty($errors)) {
        // Perform data saving process here
        // ...
        echo "Data saved successfully. :D ";
    } else {
        // If there are errors, display error message using JavaScript alert
        echo "<script>";
        echo "alert('Please fill in all required fields.');";
        echo "window.location.href = 'form_input.php';";
        echo "</script>";
    }
}
?>

<?php
$nim = $_POST['stud_num'];
$nama = $_POST['name'];
if ($_POST['gender'] == 'Male') {
    $jk = "Male";
} else {
    $jk = "Female";
}
$jur = $_POST['trymajor'];
$tgl_lahir = $_POST['date'];
$email = $_POST['email'];


// Upload file PDF
$pdf_dir = "../assets/pdf/";
$target_pdf = $pdf_dir . basename($_FILES["pdfToUpload"]["name"]);
$uploadPdfOk = 1;
$pdfFileType = strtolower(pathinfo($target_pdf, PATHINFO_EXTENSION));

// Check if file PDF is a valid PDF file
if (isset($_POST["submit"])) {
    $checkPdf = mime_content_type($_FILES["pdfToUpload"]["tmp_name"]);
    if ($checkPdf != 'application/pdf') {
        echo "!: File is not a PDF. ";
        $uploadPdfOk = 0;
    }
}

// Check if file PDF already exists
if (file_exists($target_pdf)) {
    echo "!: Looks like the PDF file already exists. Please upload it if you haven't already. ";
    $uploadPdfOk = 0;
}

// Check file PDF size
if ($_FILES["pdfToUpload"]["size"] > 5000000) {
    echo "!: Your PDF file is too large. ";
    $uploadPdfOk = 0;
}

// Allow only PDF file format
if ($pdfFileType != "pdf") {
    echo "!: Only PDF files are allowed. ";
    $uploadPdfOk = 0;
}

// Check if $uploadPdfOk is set to 0 by an error
if ($uploadPdfOk == 0) {
    echo "!: Sorry, your PDF file was not uploaded. ";
} else {
    if (move_uploaded_file($_FILES["pdfToUpload"]["tmp_name"], $target_pdf)) {
        echo "The PDF file " . htmlspecialchars(basename($_FILES["pdfToUpload"]["name"])) . " has been uploaded. :D ";
    } else {
        echo "!: Sorry, there was an error uploading your PDF file. ";
    }
}

// Upload image file
$img_dir = "../assets/img/";
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
        echo "!: File is not an image. ";
        $uploadImgOk = 0;
    }
}

// Check if image file already exists
if (file_exists($target_img)) {
    echo "!: It seems like image file already exists. Please upload it if you haven't already ";
    $uploadImgOk = 0;
}

// Check image file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "!: Your image file is too large. ";
    $uploadImgOk = 0;
}

// Allow only specific image file formats
if ($imgFileType != "jpg" && $imgFileType != "png" && $imgFileType != "jpeg" && $imgFileType != "gif") {
    echo "!: Make sure only JPG, JPEG, PNG and GIF image files are uploaded. ";
    $uploadImgOk = 0;
}

// Check if $uploadImgOk is set to 0 by an error
if ($uploadImgOk == 0) {
    echo "!: Sorry, your image file was not uploaded. ";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_img)) {
        echo "The image file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded. :D ";
    } else {
        echo "!: Sorry, there was an error uploading your image file. ";
    }
}
?>
<br>
<br>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <link rel="stylesheet" href="../css/style_output.css">
</head>
<body>
    <div class="container">
        <img src="../assets/db.png" alt="dbase" width="75" height="75">
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="3"><h3 align="center">Student Data</h3></td>
                </tr>
                <tr>
                    <td>Student Number</td><td>:</td><td><?php echo $nim;?></td>
                </tr>
                <tr>
                    <td>Student Name</td><td>:</td><td><?php echo $nama;?></td>
                </tr>
                <tr>
                    <td>Gender</td><td>:</td><td><?php echo $jk;?></td>
                </tr>
                <tr>
                    <td>Major</td><td>:</td><td><?php echo $jur;?></td>
                </tr>
                <tr>
                    <td>Date of Birth</td> <td>:</td> <td><?php echo $tgl_lahir;?></td>
                </tr>
                <tr>
                    <td>Email</td> <td>:</td> <td><?php echo $email;?></td>
                </tr>
                <!-- Tampilkan gambar -->
                <tr>
                    <td colspan="3"><img src="<?php echo $target_img; ?>" alt="hasil"></td>
                </tr>
                <!-- Tautan unduh PDF -->
                <tr>
                    <td colspan="3">
                        <a href="<?php echo $target_pdf; ?>" download>Download PDF</a>
                    </td>
                </tr>
                <tr>
                    <td><a href="form_input.php" class="btn-edit">Input Data</a></td>
                    <td><a href="form_display.php" class="btn-delete">Database</a></td>
                    <td><a href="dashboard.php" class="btn-back">Dashboard</a></td>
                </tr>
            </table>
        </form>
    </div>
    <script src="../js/script_output.js"></script>
</body>
</html>
<br>
<br>
<?php
// Include file koneksi database
include '../connection/connection.php';

// Menyimpan data yang diterima dari formulir ke dalam variabel PHP
$nim = $_POST['stud_num'];
$nama = $_POST['name'];
$jk = ($_POST['gender'] == 'm') ? "Male" : "Female";
$jur = $_POST['trymajor'];
$tgl_lahir = $_POST['date'];
$email = $_POST['email'];
$target_img = $img_dir . basename($_FILES["fileToUpload"]["name"]);
$target_pdf = $pdf_dir . basename($_FILES["pdfToUpload"]["name"]);

// Eksekusi pernyataan SQL untuk menyimpan data ke dalam tabel database
$sql = "INSERT INTO Tamu (nim, nama, jk, jurusan, tgl_lahir, email, foto, file_pdf) 
        VALUES ('$nim', '$nama', '$jk', '$jur', '$tgl_lahir', '$email', '$target_img', '$target_pdf')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
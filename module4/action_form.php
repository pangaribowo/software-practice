<?php
$nim = $_POST['stud_num'];
$nama = $_POST['name'];
if ($_POST['gender'] == 'm') {
    $jk = "Male";
} else {
    $jk = "Female";
}
$jur = $_POST['trymajor'];
$tgl_lahir = $_POST['date'];
$email = $_POST['email'];

// Upload file PDF
$pdf_dir = "pdf/";
$target_pdf = $pdf_dir . basename($_FILES["pdfToUpload"]["name"]);
$uploadPdfOk = 1;
$pdfFileType = strtolower(pathinfo($target_pdf, PATHINFO_EXTENSION));

// Check if file PDF is a valid PDF file
if (isset($_POST["submit"])) {
    $checkPdf = mime_content_type($_FILES["pdfToUpload"]["tmp_name"]);
    if ($checkPdf != 'application/pdf') {
        echo "File is not a PDF.";
        $uploadPdfOk = 0;
    }
}

// Check if file PDF already exists
if (file_exists($target_pdf)) {
    echo "Sorry, PDF file already exists.";
    $uploadPdfOk = 0;
}

// Check file PDF size
if ($_FILES["pdfToUpload"]["size"] > 500000) {
    echo "Sorry, your PDF file is too large.";
    $uploadPdfOk = 0;
}

// Allow only PDF file format
if ($pdfFileType != "pdf") {
    echo "Sorry, only PDF files are allowed.";
    $uploadPdfOk = 0;
}

// Check if $uploadPdfOk is set to 0 by an error
if ($uploadPdfOk == 0) {
    echo "Sorry, your PDF file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["pdfToUpload"]["tmp_name"], $target_pdf)) {
        echo "The PDF file " . htmlspecialchars(basename($_FILES["pdfToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your PDF file.";
    }
}

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
if ($_FILES["fileToUpload"]["size"] > 500000) {
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


// // upload picture file
// $target_dir = "img/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// // check if image file is a actual image or fake image
// if (isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if ($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }

// // check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }

// // check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }

// // Allow certain file formats
// if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "pdf") {
//     echo "Sorry, only PDF, JPG, JPEG, PNG, & GIF files are allowed.";
//     $uploadOk = 0;
// }

// // check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
// } else {
//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//         echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }
?>
<html>
<img src="assets/db.png" alt="dbase" width="75" height="75">
        <form action="action_form.php" method="post" enctype="multipart/form-data">
            <table style="width: 80%;">
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
                    <td>Date of birth</td> <td>:</td> <td><?php echo $tgl_lahir;?></td>
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
                <!-- <tr>
                    <td colspan=3><img src="<?php echo $target_file;?>" alt="hasil"></td>
                </tr> -->
</html>
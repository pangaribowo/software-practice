<?php 

session_start();

if (!isset($_SESSION['user'])) {
    header("location:../admin/dashboard.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Data Management</title>
    <link rel="stylesheet" type="text/css" href="../css/style_input.css">
</head>
<body>
    <div class="container">
        <img src="../assets/db.png" alt="dbase" width="75" height="75">
        <form action="form_output.php" method="post" enctype="multipart/form-data">
            <div class="form-container">
                <h3 class="form-title">Input Student Data</h3>
                <table>
                    <tr>
                        <td>Student Number:</td>
                        <td><input type="text" name="stud_num" size="15"></td>
                    </tr>
                    <tr>
                        <td>Student Name:</td>
                        <td><input type="text" name="name" size="30"></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <input type="radio" name="gender" value="Male">Pria &nbsp;
                            <input type="radio" name="gender" value="Female">Wanita
                        </td>
                    </tr>
                    <tr>
                        <td>Major:</td>
                        <td>
                            <select name="trymajor">
                                <option value="opt">Jurusan</option>
                                <option value="TM">Teknik Mesin</option>
                                <option value="TI">Teknik Industri</option>
                                <option value="TF">Informatika</option>
                                <option value="TP">Teknik Penerbangan</option>
                                <option value="TE">Teknik Elektro</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Date of birth:</td>
                        <td><input type="date" name="date"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Upload photos:</td>
                        <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                    </tr>
                    <tr>
                        <td>Upload PDF:</td>
                        <td><input type="file" name="pdfToUpload" id="pdfToUpload"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <input type="submit" name="save" value="Process">
                            <input type="reset" id="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</body>
</html>

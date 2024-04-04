<html>
    <head>
        <title> Module 4 </title>
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
        <img src="assets/db.png" alt="dbase" width="75" height="75">
        <form action="action_form.php" method="post" enctype="multipart/form-data">
            <table style="width: 80%;">
                <tr>
                    <td colspan="3"><h3 align="center">Input Student Data</h3></td>
                </tr>
                <tr>
                    <td>Student Number</td><td>:</td><td><input type="text" name="stud_num" size="15"></td>
                </tr>
                <tr>
                    <td>Student Name</td><td>:</td><td><input type="text" name="name" size="30"></td>
                </tr>
                <tr>
                    <td>Gender</td><td>:</td>
                    <td><input type="radio" name="gender" value="m">Male &nbsp; 
                    <input type="radio" name="gender" value="f">Female</td>
                </tr>
                <tr>
                    <td>Major</td><td>:</td>
                    <td><select name="trymajor">
                        <option value="opt">Choose Major</option>
                        <option value="ME">Mechanical Engineering</option>
                        <option value="InE">Industrial Engineering</option>
                        <option value="IsE">Informatics Engineering</option>
                        <option value="AE">Aeronautical Engineering</option>
                        <option value="EE">Electrical Engineering</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Date of birth</td> <td>:</td> <td><input type="date" name="date"></td>
                </tr>
                <tr>
                    <td>Email</td> <td>:</td> <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Upload photos</td> <td>:</td> <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                </tr>
                <tr>
                    <td>Upload PDF</td> <td>:</td> <td><input type="file" name="pdfToUpload" id="pdfToUpload"></td>
                </tr>
                <tr>
                    <td colspan="3" align="right"><input type="submit" name="save" value="process">
                    <input type="reset" id="reset" value="reset"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

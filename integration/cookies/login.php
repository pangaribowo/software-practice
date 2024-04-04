<?php
    // session_start();
    // if(!isset($_SESSION['user'])){
    //     header("location:../admin/dashboard.php");
    // } else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="../css/style_login.css">
</head>
<body>
    <div id="app">
        <h1 align="center"> Login Page </h1>
        <form name="login" action="login_check.php" method="post" id="login">
            <table align="center">
                <tr>
                    <td>User</td> <td>:</td> <td><input name="txtid" type="text" id="txtid" size="15" maxlength="15" class="input" placeholder="Enter your username" /></td>
                </tr>
                <tr>
                    <td>Password</td> <td>:</td> <td><input name="txtsandi" type="password" id="txtsandi" size="15" maxlength="25" class="input" placeholder="Your password" /></td>
                </tr>
                <tr>
                    <td align="center" colspan="3"><input name="btnlogin" type="submit" id="btnlogin" value="Login" class="btn-login" /></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

<?php
// }
?>
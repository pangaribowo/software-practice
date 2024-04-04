<!DOCTYPE html>
<html>
<head> 
    <title>Laman Login</title>
</head>
<body>
    <form name="login" action="logincheck.php" method="post" id="login">
        <table>
            <tr>
                <td>User</td> <td>:</td> <td><input name="txtid" type="text" id="txtid" size="15" maxlength="15" /></td>
            </tr>
            <tr>
                <td>Password</td> <td>:</td> <td><input name="txtsandi" type="password" id="txtsandi" size="15" maxlength="25" /></td>
            </tr>
            <tr>
                <td colspan="3"><input name="btnlogin" type="submit" id="btnlogin" value="Login" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="post" action="login_check.php" enctype="">
    <table border="1" cellspacing="0" align="center">
        <tr>
            <td>
            <img src="https://img.freepik.com/free-vector/new-2023-twitter-logo-x-icon-design_1017-45418.jpg?size=626&ext=jpg" alt="image" height="60px">
            </td>
            <td width="500px" align="right">
                <a href="public_home.html">Home |</a>
                <a href="login.php">Login |</a>
                <a href="registration.php">Registration</a>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <fieldset>
                    <legend>LOGIN</legend>
                    <table border="0" cellspacing="0" cellpadding="5" align="Center">
                        <tr>
                            <td>User Name :</td>
                            <td>:<input type="text" name="username" id=""></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:<input type="password" name="password" id=""></td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="checkbox" name="remember" id="">Remember Me</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" id="">&nbsp;<a href="forgot_password.php">Forgot Password?</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </td>
            </tr>
        </table>
</form>
    </body>
</html>
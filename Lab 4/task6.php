<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form method="post" action="registrationCheck.php" enctype="">
        <fieldset>
            <legend>REGISTRATION</legend>
            Name: <input type="text" name="name" value="" /> <br>
            <hr>
            Email: <input type="email" name="email" value="" /> <br>
            <hr>
            User Name: <input type="text" name="username" value="" /> <br>
            <hr>
            Password: <input type="password" name="password" value="" /> <br>
            <hr>
            Confirm Password: <input type="password" name="confpassword" value="" /> <br>
            <hr>
            <legend>Gender:</legend>
            <input type="radio" name="gender" value="" /> Male
            <input type="radio" name="gender" value="" /> Female
            <input type="radio" name="gender" value="" /> Other <br>
            <hr>
            <legend>Date Of Birth</legend>
            <input type="date" name="dob" value="" /> <br>
            <hr>
            <input type="submit" name="submit" value="Submit" />
            <input type="reset" name="reset" value="Reset" />
        </fieldset>
    </form>
</body>

</html>

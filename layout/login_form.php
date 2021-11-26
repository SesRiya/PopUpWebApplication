
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../stylesheet/style2.css">
</head>
<body>
<!--REGISTRATION FORM-->
<div class="form-register" id="myForm">
    <div class="form-container">
        <h1>Login</h1>

        <label for="username"><b>username</b></label>
        <input type="text" id="username" placeholder="Enter Username" name="username" required>

        <label for="pwd"><b>Password</b></label>
        <input type="password" id="password" placeholder="Enter Password" name="pwd" required>

        <button id="loginButton" class="btn">Login</button>
        <button type="button" id="closeButton" class="btn cancel"
        ">Close</button>
        <p>Not yet registered? Register <a href="registration_form.php" id="here">here</a></p>
    </div>
</div>
</body>
</html>


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
<div class="form-register" id="registrationForm">
    <form class="form-container" action="registration" .php
    " method="post">
    <h1>Become a Member</h1>

    <label for="username"><b>username</b></label>
    <input type="text" id="username" placeholder="Enter Username" name="username" required>

    <label for="email"><b>Email</b></label>
    <input type="text" id="email" placeholder="Enter Email" name="email" required>

    <label for="pwd"><b>Password</b></label>
    <input type="password" id="password" placeholder="Enter Password" name="pwd" required>


    <button type="submit" id="registrationButton" class="btn">Register</button>
    <button type="button" id="closeButton" class="btn cancel"
    ">Close</button>
    <p>Registered?<a href="login_form.php" id="here">Log in</a></p>
    </form>
</div>

<script src="../scripts/registration.js"></script>
</body>
</html>


`

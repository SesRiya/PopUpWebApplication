<?php
session_start();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet/style2.css">
</head>
<body>
<!--LOGIN FORM-->
<div class="form-register" id="myForm">
    <div class="form-container">
        <h3>Login</h3><br>
        <label for="username">Username</label>
        <input type="text" id="username" placeholder="Enter Username" name="username" required>

        <label for="pwd">Password</label>
        <input type="password" id="password" placeholder="Enter Password" name="pwd" required>

        <button id="loginButton" class="btn" >Login</button>
        <button type="button" id="closeButton" class="btn cancel" ">Close</button>
        <p>Not yet registered? Register <a href="registration_form.php" id="here" >here</a></p>
    </div>
</div>

<script src="scripts/main.js"></script>
</body>
</html>


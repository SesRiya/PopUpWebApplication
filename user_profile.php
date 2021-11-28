<?php
    session_start();
    $_SESSION['username'];
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
<p> Profile Page</p>
<p>Welcome! </p>
<?php  $_SESSION['username'] ?>
</body>
</html>

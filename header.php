<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop Up Web App</title>
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
          integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous"/>
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="stylesheet/style.css">
</head>


<body>
<!-- start #header-->
<header>
    <div class="topbar">
        <div class="loginbutton" title="Click to Log in" id="loginIcon">
            <i class="fas fa-user fa-2x"></i>
        </div>
        <!--LOGIN POPUP FORM-->

        <div class="form-popup" id="myForm">
            <div class="form-container">
                <h1>Login</h1>

                <label for="username"><b>username</b></label>
                <input type="text" id="username" placeholder="Enter Username" name="username" required>

                <label for="pwd"><b>Password</b></label>
                <input type="password" id="password" placeholder="Enter Password" name="pwd" required>

                <button id="loginButton" class="btn" >Login</button>
                <button type="button" id="closeButton" class="btn cancel" ">Close</button>
                <p>Not yet registered? Register <a href="layout/registration_form.php" id="here" >here</a></p>
            </div>
        </div>

        <div class="searchbar">
            <input type="text" class="searchTerm" placeholder="Search">
        </div>
        <div class="searchbutton">
            <button type="submit" class="searchButton">
                <i class="fa fa-search fa-2x"></i>
            </button>
        </div>
    </div>
    <!--Primary Navigation-->
    <nav class="navbar">
        <a href="index.php" class="logo">
            <img src="images/Pop-Up.png" alt="Pop-Up Logo"/></a>
        <ul style=" list-style-type: none"  none class="nav-menu">
            <li class="nav-item">
                <a href="#" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
            </li>
            <li class="nav-item" title="Add to cart">
                <!--                <a href="#" class="nav-link">Cart</a>-->
                <i class="fas fa-shopping-cart fa-3x" style="color:grey"></i>
            </li>
        </ul>

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        </div>
    </nav>
    <!--Primary Navigation-->
</header>


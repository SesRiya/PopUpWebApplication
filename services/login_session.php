<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
} else if (isset($_SESSION['username'])) {
    header('Location: error.php');
}

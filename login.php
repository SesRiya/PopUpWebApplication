<?php
include('db_conn.php');
session_start();

if (isset($_POST['username']) && isset($_POST['pwd'])) {
    // Data sanitization to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['pwd']);

    $sql = "SELECT * FROM users WHERE user_name = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $sql);
    // $results = 1 means that one user with the
    // entered username exists
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['user_name'] === $username && $row['password'] === $password) {
            // Storing username in session variable
            $_SESSION['user_name'] = $row['user_name'];
            // Welcome message
            $_SESSION['success'] = "You have logged in!";
            $_SESSION['id'] = $row['id'];
            header('Location: index.php?logged-in');
//            $var = 'logged';
        } else {
            echo "Error";
        }
    } else {
        echo "Error";
    }
}else{
    echo"password problem";
}



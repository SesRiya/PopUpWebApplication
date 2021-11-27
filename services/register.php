<?php
include('../db_conn.php');
session_start();

// Registration using Form
if(isset($_POST['username'])&& isset($_POST['email']) &&isset($_POST['pwd'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    //Check whether the user already exists
    $sql_verify = "SELECT * FROM users WHERE user_name=?";
    $stmt_verify = $conn->prepare($sql_verify);
    if (!empty($stmt_verify)) {
        $stmt_verify->bind_param("s", $username);
    }
    $stmt_verify->execute();
    $result_verify = $stmt_verify->get_result();
    if($result_verify->num_rows > 0) {
        $stmt_verify->close();
        echo 'Sorry username already exists.';
    } else {
        $sql = "INSERT INTO users (user_name, email_address, password) values (?,?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $email, $pwd);
        $stmt->execute();
        $_SESSION['username'] = $username;
        header("Location: ../index.php");
        $stmt->close();
    }
    $conn->close();
} else {
    echo 'Invalid request';
}
?>

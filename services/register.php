<?php
include('../db_conn.php');
session_start();

// Registration using Form
if(isset($_POST['username'])&& isset($_POST['email']) &&isset($_POST['pwd'])) {
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

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


$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
$name_error = "Name must contain only alphabets and space";
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(strlen($password) < 6) {
$password_error = "Password must be minimum of 6 characters";
}
if(strlen($mobile) < 10) {
$mobile_error = "Mobile number must be minimum of 10 characters";
}
if($password != $cpassword) {
$cpassword_error = "Password and Confirm Password doesn't match";
}
if (!$error) {
if(mysqli_query($conn, "INSERT INTO users(name, email, mobile_number ,password) VALUES('" . $name . "', '" . $email . "', '" . $mobile . "', '" . md5($password) . "')")) {
header("location: login.php");
exit();
} else {
echo "Error: " . $sql . "" . mysqli_error($conn);
}
}
mysqli_close($conn);
}
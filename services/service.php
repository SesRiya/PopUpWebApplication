<?php
include('../db_conn.php');
session_start();
$_POST = json_decode(file_get_contents('php://input'), true);
$data = array();

// Login using Post
if ($_POST['req'] == 'login' && ($_POST['username'] && $_POST['pwd'])) {
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
            $data = array('user_name' => $row['user_name'], 'id' => $row['id'], 'status' => 'login_success');
//                       header('Location: ../index.php?logged-in');
        }
    } else {
        $data = array('status' => 'login_error');
    }
    echo json_encode($data);

    // Load products from database
} elseif ($_POST['req'] == 'load-items') {
    $shopName = mysqli_real_escape_string($conn, $_POST['shop']);
    $sql = "SELECT * FROM $shopName";
    $result = mysqli_query($conn, $sql);
    $results = array();
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $rowData = array('id' => $row['id'], 'name' => $row['name'], 'price' => $row['price'], 'qty' => $row['quantity'], 'image_path' => $row['image_path']);
            $results[] = $rowData;
        }
        echo json_encode($results);
    } else {
        echo json_encode($results);
    }

    //Load products from all table in database
} elseif ($_POST['req'] == 'load-all-items') {
    $sql = "SELECT * FROM olivia_sage UNION ALL SELECT * FROM home_decor UNION ALL SELECT  * FROM panade_riya";
    $result = mysqli_query($conn, $sql);
    $results = array();
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $rowData = array('id' => $row['id'], 'name' => $row['name'], 'price' => $row['price'], 'qty' => $row['quantity'], 'image_path' => $row['image_path']);
            $results[] = $rowData;
        }
        echo json_encode($results);
    } else {
        echo json_encode($results);
    }
} else {
    $data = array('status' => 'invalid_request');
    echo json_encode($data);
}
//// Registration using Form
//if(isset($_POST['username']) && isset($_POST['psw'])) {
//    $username = $_POST['username'];
//    $pwd = $_POST['psw'];
//    $sql = "SELECT * FROM login WHERE username='$username' AND password='$pwd'";
//    $result = $conn->query($sql);
//    if ($result->num_rows === 1) {
//        $_SESSION['username'] = $username;
//        $_SESSION['logged_in'] = 'true';
//        header("Location: ../index.php");
//    } else {
//        echo '<h3>Sorry! Invalid username or password</h3>';
//    }
//} else {
//    echo 'Invalid request';
//}
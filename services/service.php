<?php
include('../db_conn.php');
session_start();
$_POST = json_decode(file_get_contents('php://input'), true);
$data = array();

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
           // header('Location: ../index.php?logged-in');
            $data = array('user_name' => $row['user_name'], 'id' => $row['id'], 'status' => 'login_success');
        } else {
            $data = array('status' => 'login_error');
        }
        echo json_encode($data);
    }
} elseif ($_POST['req'] == 'load-items') {
    $shopName = mysqli_real_escape_string($conn, $_POST['shop']);
    $sql = "SELECT * FROM olivia_sage";
    $result = mysqli_query($conn, $sql);
    $results = array();
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $rowData = array('id'=>$row['id'],'name'=>$row['name'], 'price'=>$row['price'], 'qty'=>$row['quantity'], 'image_path'=>$row['image_path']);
            $results[] = $rowData;
        }
        echo json_encode($results);
    } else {
        echo json_encode($results);
    }
}

else {
    $data = array('status' => 'invalid_request');
    echo json_encode($data);
}



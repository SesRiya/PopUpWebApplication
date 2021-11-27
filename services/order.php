<?php
$_POST = json_decode(file_get_contents('php://input'), true);
include ('db-conn.php');
$username = $_POST['user_name'];
$item = $_POST['item_name'];
$price = $_POST['item_price'];
$quantity = $_POST['quantity'];
if(!is_null($username)) {
    //Get the available qty from the products table, SELECT QUERY
    //Check the request qty is larger than the available qty
    //if === true execute the below code
    // else show error
    //Update the products table with remaining qty, UPDATE query
    $total_price = $price * $quantity; //Calculate the total price of the order
    $sql = "INSERT INTO order_cart (user_name, item_name, item_price, quantity) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdi", $username, $item, $quantity, $total_price);
    $stmt->execute();
    $result['result'] = 'success';
    $result['message'] = 'order-added-successfully';
    $stmt->close();
    $conn->close();
} else {
    $result['result'] = 'failed';
    $result['message'] = 'please-login-first';
}
echo json_encode($result);

<?php
$_POST = json_decode(file_get_contents('php://input'), true);
include ('db-conn.php');
$item = $_POST['item'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

    //Get the available qty from the products table, SELECT QUERY
    //Check the request qty is larger than the available qty
    //if === true execute the below code
    // else show error
    //Update the products table with remaining qty, UPDATE query
    $total_price = $price * $quantity; //Calculate the total price of the order
    $sql = "INSERT INTO order_cart (item_name, item_price, quantity) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdi", $item,$total_price,$quantity);
    $stmt->execute();
    $result['result'] = 'success';
    $result['message'] = 'order-added-successfully';
    $stmt->close();
    $conn->close();

echo json_encode($result);

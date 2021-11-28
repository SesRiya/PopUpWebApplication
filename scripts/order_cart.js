
function orderProduct(obj) {
    let item_p = document.getElementById(obj.dataset.id + 'name').innerText;
    let price_p = document.getElementById(obj.dataset.id + 'price').innerText;
    let quantity_p = document.getElementById(obj.dataset.id+'qty').value;
    let orderData = {item: item_p, price: price_p, quantity: quantity_p};
    orderItems('/PopUpWebApplication/services/order.php', orderData).then((response)=>{
        if(response['message'] === 'order-added-successfully') {
            window.location.href = 'cart.php';
            alert("added to cart successfully")
        }
    });
}

async function orderItems(url, data) {
    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type':'application/json'
        },
        body: JSON.stringify(data)
    });
    return response.json();
}


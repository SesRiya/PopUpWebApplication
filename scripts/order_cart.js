const orderCart= document.getElementById('cartButton');
const itemName = document.getElementById('itemName');
const itemPrice = document.getElementById('itemPrice');
const quantity = document.getElementById('quantity');
const products = document.getElementById('gallery');

function orderProduct(obj) {
    let item_p = document.getElementById(obj.dataset.id + 'name').innerText;
    let price_p = document.getElementById(obj.dataset.id + 'price').innerText;
    let quantity_p = document.getElementById(obj.dataset.id+'qty').value;
    let data = {item: item_p, price: price_p, quantity: quantity_p};
    order('/PopUpWebApplication/services/order.php', data).then((response)=>{
        console.log(response);
        if(response['message'] === 'order-added-successfully') {
            console.log("test");
            window.location.href = 'cart.php';
        }
    });
}

async function order(url, data) {
    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type':'application/json'
        },
        body: JSON.stringify(data)
    });
    return response.json();
}
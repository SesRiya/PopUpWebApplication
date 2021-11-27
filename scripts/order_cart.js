const orderCart= document.getElementById('cartButton');
const itemName = document.getElementById('itemName');
const itemPrice = document.getElementById('itemPrice');
const quantity = document.getElementById('quantity');
const products = document.getElementById('gallery');

orderCart.addEventListener('click', ()=>{
    let data = {item: itemName.innerText, price: itemPrice.innerText, quantity: quantity.value};
    order('/PopUpWebApplication/services/order.php', data).then((response)=>{
        console.log(response);
        if(response['message'] === 'order-added-successfully') {
            window.location.href = '/fine_art_shop/payment.php';
        }
    });

});

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
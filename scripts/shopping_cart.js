const cartProducts = document.getElementById('cartItems');

//Load all data on page load
postData('/PopUpWebApplication/services/service.php', {req: 'load-to-cart'}).then((response) => {
    let contents = '';
    response.forEach((res) => {
        contents +=
            '<div id="cartItems">' +
            '<p>'+ res['item_name'] + '<span class="price">' + res['price'] + '</span>' +'</p>' +
        '</div>';

    });
    createItemsUI(contents);
});
function createItemsUI(contents) {
    cartProducts.innerHTML = contents;
}

async function postData(url = '', data = {}) {
    const response = await fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    });
    return response.json();
}

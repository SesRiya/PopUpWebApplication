 const shopAllProducts = document.getElementById('shop-products-items');

//Load all data on page load
postData('/PopUpWebApplication/services/service.php', {req: 'load-all-items'}).then((response) => {
    let contents = '';
    response.forEach((res) => {

        contents += '<div class="rowgallery">' + '<br>' +
            '<div class="responsive">' +
            '<div class="gallery" >' +
            '<a target="_blank" href="">' +
            '<img src="' + res['image_path'] + '"  alt="plant" width="350" height="300"/>' +
            '</a>' +
            '<div class="desc" id="itemName">' + res['name'] +
            '<div class="desc" id="itemPrice">' + res['price'] +
            '<div id="quantity">' +  '<label for="quantity">Quantity:</label>' +
            '<input id="qty" name="quantity" type="quantity" class="quantity">' +
            '<div><button id = "cartButton" class = "button" >' + "Add to Cart " +
            '</button> ' + '</div>' + '</div>' + '</div>' + '</div>' + '</div>' + '</div>' + '</div>';

    });
    createItemsUI(contents);
});

function createItemsUI(contents) {
 shopAllProducts.innerHTML = contents;
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

// async function postData(url1,data)  {
//     const options = {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json'
//         },
//         body: JSON.stringify(data)
//     };
//     const promise1 = fetch(url1, options).then(
//         function (response) {
//             return response.json();
//         }
//     )
//     const promise2 = fetch(url2, options).then(
//         function (response) {
//             return response.json();
//         }
//     )
//     const result = await Promise.all([promise1, promise2]).then((values) => {
//         console.log([...values[0], ...values[1]]);
//         return [...values[0], ...values[1]];
//     });
//     return result;
//
// }
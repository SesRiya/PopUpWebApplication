const shopAllProducts = document.getElementById('shop-products-items');

//Load all data on page load
//Generate dynamic id for each item using id from database
postData('/PopUpWebApplication/services/service.php', {req: 'load-all'}).then((response) => {
    let contents = '';
    response.forEach((res) => {
        contents += '<div id='+res['id']+' class="rowgallery">' + '<br>' +
            '<div class="responsive">' +
            '<div class="gallery" >' +
            '<a target="_blank" href="">' +
            '<img src="' + res['image_path'] + '"  alt="plant" width="350" height="300"/>' +
            '</a>' +
            '<div class="desc" id='+res['id']+'name'+'>' + res['name'] +'</div>'+
            '<div class="desc" id='+res['id']+'price'+'>' + res['price'] +'</div>' +
            '<div id="quantity">' +  '<label for="quantity">Quantity:</label>' +
            '<input id='+res['id']+'qty'+' name="quantity" type="quantity" class="quantity">' +
            '<div><button data-id='+res['id']+' onclick="orderProduct(this)" class = "button" >' + "Add to Cart111 " +
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

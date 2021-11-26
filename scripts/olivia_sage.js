const shopPlantItems = document.getElementById('shop-plant-items');

//Load all data on page load
postData('/PopUpWebApplication/services/service.php', {req: 'load-items', shop: 'olivia_sage'}).then((response) => {
    let contents = '';
    response.forEach((res) => {
        // contents += '<div>' + res['name'] + res['price'] + '</div>' +
        //     '<div>' +
        //     '<div><img src="'+ res['image_path']  + '"  alt="plant"/>' + '</div>' + '</div>';
        //

        contents += '<div class="rowgallery">' +'<br>' +
            '<div class="responsive">' +
            '<div class="gallery">' +
            '<a target="_blank" href="">' +
            '<img src="' + res['image_path'] + '"  alt="plant" width="300" height="300"/>' +
            '</a>' +
            '<div class="desc">' + res['name'] + res['price'] +
             '<button id = "cartButton" class = "button" >' + "Cart " +
                '</button> ' +'</div>' +'</div>' + '</div>' + '</div>' ;

    });
    createItemsUI(contents);
});

function createItemsUI(contents) {
    shopItems.innerHTML = contents;
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



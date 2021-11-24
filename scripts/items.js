const shopItems = document.getElementById('shop-items');
//Load all data on page load
console.log("hello")
postData('/PopUpWebApplication/services/service.php', {req: 'load-items', shop: 'olivia_sage'}).then((response) => {
    let contents = '';
    response.forEach((res) => {
        // contents += '<div>' + res['name'] + res['price'] + '</div>' +
        //     '<div>' +
        //     '<div><img src="'+ res['image_path']  + '"  alt="plant"/>' + '</div>' + '</div>';
        //

       contents += '<div className="rowgallery">' +
                '<div className="responsive">' +
                    '<div className="gallery">' +
                        '<a target="_blank" href="">' +
                            '<img src="'+ res['image_path'] + '"  alt="plant" width="150" height="150"/>' +
                        '</a>' +
                        '<div className="desc">' + res['name'] + '</div>' +
                    '</div>' +
                '</div>';

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
function inc(element) {
    var item_price = document.getElementById('item_price').value;
    let el = document.querySelector(`[name="${element}"]`);
    el.value = parseInt(el.value) + 1;
    var price = parseFloat(item_price) * el.value;
    document.getElementById('curt').innerText = "Add to cart ("+price+"JD)";
}

function dec(element) {
    var item_price = document.getElementById('item_price').value;
    let el = document.querySelector(`[name="${element}"]`);
    if (parseInt(el.value) > 0) {
        el.value = parseInt(el.value) - 1;
    }
    var price = parseFloat(item_price) * el.value;
    document.getElementById('curt').innerText = "Add to cart ("+price+"JD)";
}
function open_panel($id) {
    var panel = document.getElementById($id);
    var actv = document.getElementById('act_' + $id);
    if (panel.style.display === "block") {
        panel.style.display = "none";
        actv.classList.remove("actives");
    } else {
        panel.style.display = "block";
        actv.classList.add("actives");
    }
}

function addProduct(){
    var item_id = document.getElementById('item_id').value;
    var item_img = document.getElementById('item_img').value;
    var item_title = document.getElementById('item_title').value;
    var qty = document.getElementById('qty').value;
    var item_price = document.getElementById('item_price').value;
    var price = parseFloat(item_price) * parseFloat(qty);
    let products = [];
    removeProduct(item_id);
    if(localStorage.getItem('products')){
        products = JSON.parse(localStorage.getItem('products'));
    }
    products.push(
        {
            'item_id' : item_id ,
            'item_img' : item_img ,
            'item_title' : item_title ,
            'item_price' : price ,
            'qty' : qty ,
        });
    localStorage.setItem('products', JSON.stringify(products));
}

function removeProduct(productId){
    let storageProducts = JSON.parse(localStorage.getItem('products'));
    console.log(storageProducts);
    if (storageProducts != null) {
        let products = storageProducts.filter(product => product.item_id !== productId );
        localStorage.setItem('products', JSON.stringify(products));
    }
}
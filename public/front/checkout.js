function myFunction() {
    const cart = JSON.parse(localStorage.getItem('products'));
    var acc ;
    var acc_name = '';
    var inc = 1;
    var dec = 0;
    $(".box").remove();
    for (var i = 0; i < cart.length; i++){
        if (cart[i].acc.length > 0) {
            acc = cart[i].acc;
            for (var j = 0; j < cart[i].acc.length; j++){
                acc_name += acc[j].title + ' ' + acc[j].v_price + 'JD' + ' ,';
            }
        }
        $('.shop').append(
            '<div class="box">'+
            '<img src="/storage/'+cart[i].item_img+'">'+
            '<div class="content">'+
                '<h3>'+cart[i].item_title+'</h3>'+
                '<p>'+acc_name+'</p>'+
                '<br>'+
                '<p class="unit"><button type="submit" class="qty" value="inc" onclick="updateProduct('+cart[i].random+','+inc+')">+</button><input id="'+cart[i].random+'" value="'+cart[i].qty+'" readonly \/><button class="qty" onclick="updateProduct('+cart[i].random+','+dec+')" value="dec">-</button></p>'+
                '<p onclick="removeProduct('+cart[i].random+')" class="btn-area" style="background-color: red;color:white;padding:5px"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2"></span><b>'+cart[i].item_price+' JD</b></p>'+
            '</div>'+
        '</div>'
        );
        acc_name = '';
    }
}
function updateProduct(random,oppreition){
    let cart = JSON.parse(localStorage.getItem('products'));
    var qty = parseInt($('#'+random).val());
    if (oppreition == 1) {
        qty++;
    } else {
        if (qty > 1) {
            qty--;
        }
    }
    for (var i = 0; i < cart.length; i++){
        if (random == cart[i].random) {
            if (oppreition == 1) { 
                cart[i].item_price = cart[i].price * qty;
            } else {
                if (qty == 1) {
                    cart[i].item_price = cart[i].price;
                } else {
                    cart[i].item_price = cart[i].price * qty;
                }
            }
            cart[i].qty = qty;
        }
    }
    localStorage.setItem('products', JSON.stringify(cart));
    myFunction();
}

function removeProduct(random){
    let storageProducts = JSON.parse(localStorage.getItem('products'));
    if (storageProducts != null) {
        let products = storageProducts.filter(product => product.random !== random );
        localStorage.setItem('products', JSON.stringify(products));
    }
    myFunction();
}


myFunction();
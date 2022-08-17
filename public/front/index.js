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
    var required = document.getElementById('required');
    if (required != null) {
        if (required.value > 0) {
            if ($('div.checkbox-group.required :radio:checked').length > 0) {
                pushStore();
                toastr.success('Click Button');
            } else {
                toastr.error('p rr ');
            }
        }
    } else {
        pushStore();
        toastr.success('Click Button');
    }
}

function pushStore() {
    var item_id = $('#item_id').val();
    var key = $('#key');
    if (key !=null) { key = key.val(); } else { key = 0; }
    var item_price = $('#item_price').val();
    var price = 0;
    var price_checked = 0;
    let acc = [];
    $('input[type=checkbox], input[type=radio]').each( function() {
        if( $(this).is(':checked') ) {
            acc.push({
                'title' : $(this).attr("title") ,
                'v_id' : $(this).attr("id_v") ,
                'v_price' : parseFloat($(this).val()),
            });
            price_checked += parseFloat($(this).val());
        }
    });
    
    var item_img = $('#item_img').val();
    var item_title = $('#item_title').val();
    var qty = $('#qty').val();

    price = parseFloat(item_price) * parseInt(qty);
    price_checked = qty * price_checked;
    price = price + price_checked;

    let products = [];
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
        'acc' : acc ,
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

$("#form_calc").change(function() {
    var qty = parseInt($('#qty').val());
    var checkd = 0;
    var totalPrice   = parseFloat($('#item_price').val()),
    values       = [];
    $('input[type=checkbox], input[type=radio]').each( function() {
      if( $(this).is(':checked') ) {
        values.push($(this).val());
        checkd += parseFloat($(this).val());
        }
    });
    totalPrice = totalPrice * qty;
    checkd = qty * checkd;
    totalPrice = totalPrice + checkd;
    $("#curt span").text(totalPrice);  
    $('#checkd').val(checkd)
});   

$("#inc").click(function(){
    var qty = parseInt($('#qty').val());
    var checkd = parseFloat($('#checkd').val());
    var totalPrice   = parseFloat($('#item_price').val());
    qty++;
    totalPrice = totalPrice * qty;
    checkd = qty * checkd;
    totalPrice = totalPrice + checkd;
    $("#curt span").text(totalPrice);  
    $('#qty').val(qty);
});

$("#dec").click(function(){
    var qty = parseInt($('#qty').val());
    var checkd = parseFloat($('#checkd').val());
    var totalPrice   = parseFloat($('#item_price').val());
    qty--;
    if (qty > 0) {
        totalPrice = totalPrice * qty;
        checkd = qty * checkd;
        totalPrice = totalPrice + checkd;
        $("#curt span").text(totalPrice);  
        $('#qty').val(qty);
    }
});
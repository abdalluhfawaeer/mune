<div>
    <style>
        .right-bar a ,.btn-area{
            background-color: {{ $menu->color }};
            color: {{ $menu->text }};        
        }
        .qty {
            padding :5px;
            border: none;
            background-color: {{ $menu->color }};
            color: {{ $menu->text }};
        }
        .btn-area i {
            margin-right :unset
        }
        input[type=radio]:checked + .label {
            background-color: {{ $menu->color }}; 
        }
    </style>
    <div class="top-container">
        <center>
            <img class="logo" src="{{ asset('storage/' . $menu->logo) }}" alt="">
            <p class="desc">{{ $menu->name }}</p>
            <p class="desc" style="opacity: 0.6;">{{ $menu->desc }}</p>
        </center>
    </div>
    <div class="wrapper">
		<div class="project">
			<div class="shops">
                <center>
                <div class="input">
                    <label for="" class="custmert">user name</label>
                    <br>
                    <input type="text" name="" id="name" class="custmer" placeholder="User Nmae">
                    <br>
                    <br>
                    <label for="" class="custmert">mobile</label>
                    <br>
                    <input type="text" name="" id="mobile" class="custmer" placeholder="Mobile">
                </div>
                <div class="checkd">
                    <label>
                        <input type="radio" name="check" id="no">
                        <span class="label">
                            <i class="fa fa-cutlery" aria-hidden="true"></i><br>
                            from the restaurant
                        </span>
                    </label>
                    <label>
                        <input type="radio" name="check" id="yes">
                        <span class="label">
                            <i class="fa fa-car" aria-hidden="true"></i><br>
                            Delivery
                        </span>
                    </label>
                </div>
                
                </center>
			</div>
			<div class="right-bar">
				<hr>
				<p><span>Total</span> <span id="total">141 JD</span></p>
				<a onclick="send()"><i class="fa fa-shopping-cart"></i>Checkout</a>
			</div>
		</div>
        <p id="demo"></p>

	</div>
    @push('scripts')
    <script>
        var text = "";
        function send() {
            text = '';
            var type = '';
            var order_id = 0;
            var error = 0;
            var name = $('#name').val();
            var mobile = $('#mobile').val();
            var phoneno = /^[07][7-9]{1}[0-9]{8}/g;
            if (name == '') {
                toastr.error('p rr ');
                error++;
            }

            if (mobile == '') {
                toastr.error('p rr ');
                error++;
            }

            if(!mobile.match(phoneno)) {
                toastr.error('p rr ');
                error++;
            }

            if ($(':radio:checked').length == 0) {
                toastr.error('p rr ');
                error++;
            } 
            if (error == 0){
                let cart = JSON.parse(localStorage.getItem('products'));
                if($('#yes').is(':checked')) {
                    type = 'delvairy';
                } else {
                    type = 'from';
                }
                text +="hello " + name + "%0A";
                text +="welcam to rewadsad%0A";
                promiseB = @this.sends(name, mobile,cart,type)
                order_id = promiseB.then(function(result) {
                    return result + 1;
                });
                console.log(order_id);
                text +="number order" + order_id;
                text +="%0A";
                for (var i = 0; i < cart.length; i++){
                    text += "item " + cart[i].item_title + " Qty " + cart[i].qty +"x "+"price "+cart[i].item_price+"%0A";
                    if (cart[i].acc !=null) {
                        for (var j = 0; j < cart[i].acc; j++){
                            text += " acc " + cart[i].acc[j].title + " price " + cart[i].acc[j].v_price +",";
                        }
                    }
                    text +="%0A";
                }
                text +="%0A";
                console.log(text);
                // if($('#yes').is(':checked')) {
                //     if (navigator.geolocation) {
                //         navigator.geolocation.getCurrentPosition(showPosition);
                //     } 
                // } else {
                //     window.location.href = "https://wa.me/"+{{ $menu->user->mobile }}+"?text="+text;
                // }
            }
           
    }
    function showPosition(position) {
        url = "http://maps.google.com/maps?q="+position.coords.latitude+","+position.coords.longitude;
        text +="location: "+url;
        window.location.href = "https://wa.me/918789529215?text="+text;
    }
    </script>
    <script src="{{ url('front/checkout.js') }}"></script>
    @endpush
</div>

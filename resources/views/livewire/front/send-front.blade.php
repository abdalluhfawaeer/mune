<div>
    @livewire('front.front-header',['id'=>$menu->id , 'type' => $type])
    <div class="wrapper animate__animated animate__backInLeft" wire:ignore>
		<div class="project">
			<div class="shops">
                <center>
                <div class="input">
                    <div>
                        <label for="" class="custmert">{{ __('text.username') }}</label>
                        <br>
                        <input type="text" name="" id="name" class="custmer" placeholder="{{ __('text.username') }}">
                    </div>
                    <br>
                    <div>
                        <label for="" class="custmert">{{ __('text.Mobile') }}</label>
                        <br>
                        <input type="text" name="" id="mobile" class="custmer" placeholder="{{ __('text.Mobile') }}">
                    </div>
                    <br>
                    <div style="display: none" id="address_d">
                        <label for="" class="custmert" >{{ __('text.address') }}</label>
                        <br>
                        <input type="text" name="" id="address" class="custmer" placeholder="{{ __('text.address') }}">
                    </div>
                    <div style="display: none" id="tablenumber_d">
                        <label for="" class="custmert">{{ __('text.tablenumber') }}</label>
                        <br>
                        <input type="text" name="" id="tablenumber" class="custmer" placeholder="{{ __('text.tablenumber') }}">
                    </div>
                </div>
                <div class="checkd">
                    <label>
                        <input type="radio" name="check" id="no" value="from">
                        <span class="label">
                            <i class="fa fa-cutlery" aria-hidden="true"></i><br>
                            {{ __('text.restaurant') }}
                        </span>
                    </label>
                    <label>
                        <input type="radio" name="check" id="yes" value="Delivery">
                        <span class="label">
                            <i class="fa fa-car" aria-hidden="true"></i><br>
                            {{ __('text.Delivery') }}
                        </span>
                    </label>
                    <label>
                        <input type="radio" name="check" id="table" value="table">
                        <span class="label">
                            <i class="fa-solid fa-tablet"></i><br>
                            {{ __('text.from_the_table') }}
                        </span>
                    </label>
                </div>
                
                </center>
			</div>
			<div class="right-bar">
                <p><span>{{ __('text.total') }}</span> <span id="cart_r">0</span></p>
                <a onclick="send()"><i class="fa-solid fa-check"></i>{{ __('text.Checkout') }}</a>
                <br>
				<a href="/{{ $menu->name }}/{{ $menu->id }}"><i class="fa fa-shopping-cart"></i>{{ __('text.back') }}</a>
			</div>
		</div>
        <p id="demo"></p>
	</div>
    <div class="check" style="display: none" wire:ignore>
        <img src="{{ url('check.png') }}" alt="" width="100%">
        <center>
			<h3>{{ __('text.check_send') }}</h3>
			<br>
		</center>
		<div class="right-bar" style="height: 50px">
			<a href="/{{ $menu->name }}/{{ $menu->id }}"><i class="fa fa-shopping-cart"></i>{{ __('text.back') }}</a>
		</div>
    </div>
    @livewire('front.front-footer',['id'=>$menu->id , 'type' => $type ,'theme' => $theme])
    @push('scripts')
    <script>
        window.onload = function() {
            fetchCart();
        };
		function fetchCart() {
			const cart = JSON.parse(localStorage.getItem('products_'+{{ $menu->id }}));
			var total = 0;
            if (cart != null) {
                if (cart.length > 0) {
                    for (var i = 0; i < cart.length; i++) {
				        total += cart[i].item_price;
			        }
			        $('#cart_r').text(total+' JD');
                }
            } else {
                window.location.href = "/"+'{{ $menu->name }}'+"/"+'{{ $menu->id }}'+"";
            }
		}
        $("#yes").click(function(){
            $('#address_d').css('display','block');
            $('#tablenumber_d').css('display','none');
        });
        $("#table").click(function(){
            $('#address_d').css('display','none');
            $('#tablenumber_d').css('display','block');
        });
        $("#no").click(function(){
            $('#address_d').css('display','none');
            $('#tablenumber_d').css('display','none');
        });
        var text = "";
        function send() {
            text = '';
            var type = '';
            var order_id = 0;
            var name_menu = $('#name_menu').val();
            var error = 0;
            var name = $('#name').val();
            var mobile = $('#mobile').val();
            var address = $('#address').val();
            var tablenumber = $('#tablenumber').val();
            var total = 0;
            var phoneno = /^[07][7-9]{1}[0-9]{8}/g;
            if (name == '') {
                toastr.error("{{ __('text.name_error') }}");
                error++;
            }

            if (mobile == '') {
                toastr.error("{{ __('text.mobile_error') }}");
                error++;
            }

            if (mobile != '') {
            if(!mobile.match(phoneno)) {
                toastr.error("{{ __('text.phoneno') }}");
                error++;
            }}

            if ($(':radio:checked').length == 0) {
                toastr.error("{{ __('text.type_error') }}");
                error++;
            } 

            if($('#yes').is(':checked')) {
                if (address == '') {
                    toastr.error("{{ __('text.Address_error') }}");
                    error++;
                }
            } 

            if($('#table').is(':checked')) {
                if (tablenumber == '') {
                    toastr.error("{{ __('text.table_error') }}");
                    error++;
                }
            } 

            if (error == 0){
                let cart = JSON.parse(localStorage.getItem('products_'+{{ $menu->id }}));
                if($('#yes').is(':checked')) {
                    type = 'delvairy';
                } 

                if($('#no').is(':checked')) {
                    type = 'from_restaurant';
                } 

                if($('#table').is(':checked')) {
                    type = 'table';
                }

                text +="مرحباً ("+ name_menu +") اريد عمل طلب جديد";
                promiseB = @this.sends(name, mobile,cart,type,tablenumber,address)
                Livewire.on('order_id',(id) => {
                    order_id = id;
                    text += "%0A";
                    text += "----------------------------------------------------------------------------------";
                    text += "رقم الطلب:"+order_id;
                    text += "%0A";
                    text += "-----------------------------------------------------------------------------------";
                    for (var i = 0; i < cart.length; i++){
                         text += "item " + cart[i].item_title + " Qty " + cart[i].qty +"x "+"price "+cart[i].item_price+"";
                         text += "%0A";
                            if (cart[i].acc != null) {
                                for (var j = 0; j < cart[i].acc; j++){
                                    text += " acc " + cart[i].acc[j].title + " price " + cart[i].acc[j].v_price +",";
                                }
                        }
                        total += cart[i].item_price;
                        text += "%0A";
                    }
                    text +="%0A";
                    text +="------------------------------------------------------------------";
                    text +="السعر :"+total+"JD";
                    text +="%0A";
                    text +="-------------------------------------------------------------------";
                    text +="اسم الزبون:"+name;
                    text +="%0A";
                    text +="---------------------------------------------------------------------";
                    text +="رقم الهاتف :"+mobile;
                    text +="%0A";
                    text +="----------------------------------------------------------------------";
                    text +="شكرا لتواصلك معنا ، سوف يؤكد (اسم المطعم) طلبك حالاً.";
                    text +="%0A";
                    text +="----------------------------------------------------------------------";
                    if (address == '') {
                        text +="العنوان :"+address;
                    }
                    text +="%0A";
                    if($('#yes').is(':checked')) {
                        if (navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition(showPosition);
                        } 
                    } else {
                        link = "https://wa.me/"+{{ $menu->user->mobile }}+"?text="+text;
                        window.open(link, "_blank");
                    }
                });
                $('.wrapper').css('display','none');
                $('.check').css('display','block');
                localStorage.clear();
            }
           
    }

    function showPosition(position) {
        url = "http://maps.google.com/maps?q="+position.coords.latitude+","+position.coords.longitude;
        text +="location: "+url;
        @this.sendLoction(url)
        link = "https://wa.me/"+{{ $menu->user->mobile }}+"?text="+text;
        window.open(link, "_blank");
    }
    </script>
    <script src="{{ url('front/navopen.js') }}"></script>
    @endpush
</div>

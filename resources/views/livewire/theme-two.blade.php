<div>
    <div class="top-container animate__animated animate__backInDown" >
        <div class="l">
            <a href="/{{ $menu->name }}/{{ $menu->id }}/checkout" class="link"><i class="fa-solid fa-cart-shopping"></a></i>
        </div>
        <center>
            <img class="logo" src="{{ asset('storage/' . $menu->logo) }}" alt="">
            <p class="desc">{{ $menu->name }}</p>
            <p class="desc" style="opacity: 0.6;">{{ $menu->desc }}</p>
        </center>
        <div class="r">
            @if (app()->getLocale() == 'en')
                <a href="/lang/ar" class="link">AR</a> 
            @else
                <a href="/lang/en" class="link">EN</a> 
            @endif
        </div>
    </div>
    <div id="navopen">
        <div class="topnav" id="myTopnav" style="display: none">
            <a href="#home"><img class="logo2" src="{{ asset('storage/' . $menu->logo) }}" alt=""></a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#contact">cart</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
              <i class="fa fa-bars"></i>
            </a>
            <a href="/{{ $menu->name }}/{{ $menu->id }}/checkout" class="icon" style="right: 54px;">
                <i class="fa fa-shopping-cart"></i>
              </a>
          </div>
    </div>
    <div class="category animate__animated animate__backInRight">
        @foreach ($category as $cat)
            <div class="cat" wire:click="item({{ $cat->id }})" >
                <img src="{{ asset('storage/' . $cat->img) }}" class="btni">
                @if (app()->getLocale() == 'en')
                    <p>{{ $cat->name_en }}</p>
                @else
                    <p>{{ $cat->name_ar }}</p>
                @endif
            </div>
        @endforeach
    </div>
    <center><div class="loader" wire:loading></div></center>
    <center>
    <div class="cards">
        @foreach ($items as $item)
            <div class="card" wire:click="modal({{ $item->id }})" onclick="hideButton()">
                <div class="letf">
                    <img src="{{ asset('storage/' . $item->img) }}" class="btni">
                </div>
                <div class="right">
                    @if (app()->getLocale() == 'en')
                        <p class="title">{{ $item->name_en }}</p>
                    @else
                        <p class="title">{{ $item->name_ar }}</p>
                    @endif
                    <p>{{ $item->price }}</p>
                </div>
            </div>
        @endforeach
    </div>
    </center>
    <div class="button_cart" wire:ignore>
        <button class="button_carts">
            <span id="cart_r" style="float: right;"></span>
                <a href="/{{ $menu->name }}/{{ $menu->id }}/checkout">{{ __('text.view_cart') }}</a>
            <span id="cart_l" style="float: left;"></span>
        </button>
    </div>
    <div class="footer animate__animated animate__backInUp">
        <b>{{ $menu->name }}</b>
        <br>
        <br>
        <div class="link">
         <a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABy0lEQVRIie2Wyy8DURTGv3uNok3QKq3XjkRXJIh4RKZ2FhILtbS2s7MQOwt/gq3EThc2JE0k7SxFJB4RRRsRSkgNIaYqpnMtRNvpc3Q6Vv1Wk2/OOb+cm3tuDlDRP4nkMnk+wCkNMRflmENPcUUmj/TVHBQEt1wUzE/v9DHKvGCkSw80RWBhythMYGvqOC+Y5wMcs0nBskFTCrVwksvrnU38GlT12yr1GAAFgO6obHalG2owY3YDoDlrc+WoOTbkwOREB9qdFphMFFExjoXlvYI5usEDvXasLPaDpN0WSnIOS3nB7tHWJPTx6QOHJyLEl0/jwS32uuT3hjeM7d1bTXm0eEhhVXOpY5UTTHNeyR3Pz/VgfNgJu61W5c15unB9846l1YOC+SV33FhvQpvDDFM1zfLin1kvZJZK7vjo7BlfsoKRQQearDU/3qmI23sJ+4dPxoF9/gh8/gg62yxJsE+4g88f0ZSv+3KVqgq4AjZM6nEipPgAZuji6g0J5eepFJ/j+QMzaqvBL5Zz2KTwX7aQtfWglrDLZi6mClQdtSC4ZaIQD4CQVrAGhSiU2fR9C8iz3no8m1VR2ewChVMXUsFDMxcLZkIr+ld9A4gGjmUCvzRgAAAAAElFTkSuQmCC"></a>
         <a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAC7klEQVRIie3WTWxUZRTG8efMVMCmKoSiZUKxHSg1BRcorlywMiSEBRurRiRQI5FgujAqhKTYmLgxYECSaqMJEuNHwlKjkLgg4gIjISig8QNCDIwlpdNmSqUzve/5u0BK56MzUzsr5SRvchfvPb8857335kp36r9eVqtGib7B9phsI9CCdN2Djg80NR5Vp4XJPf2p+tS2xTdkRhG88uPr684/23CsarGXuiUPDO0VvASKA7q9dMZD7EmLZevd6za6syr9SqJTKkjc8enYagt8L2nz+U0Nn1TjNr97rQ/YDlIBeus6gOLuDFuwx4daF/+qTguxvC5Bq5HiDh+1H868KoonMrWW9g0+CrxYBtU/aA7nSGSh595Ll5+QpDzYTHWA3ImB3mr7MPPFQ4eGW6aDXXoaZGVQuSNgDuIFc05lXms+WgQHD+dubpy8ef2E28/JD4b3P/j+SGshDCSrQAVI2NaRXUvfngxZ0MlWHB79AXi4uBGATrrrK7m+Q+GiO28gPVMJBSkua07vXHK5JLz8HebqvpEOBfsG1FCY5nazsmdahAJk6rN3q7ste8vKG3XsntEdctsPOllDVEB6KipJdXmTDuEUZvtqjAr0Y+HzkZf4t+fnn8A5XWNUoKIPUv57bEYU9+ccrtUORQrRl+VhSX90LfzJQuwxD3wO+GxRh+Nje5adrQhLUmQTHZLGQRdmg95c/mYpoyQ8Lxf/1mEt0DYb1MWx8Z5lX1cN/969MCOxDkj/+6RcjUe2pVT/aWFJurLj/jOWDe0S+4BzwMQM0MiDNo/1tg5M17/yjwDYogOpLtz2ujO/CjQXXJtyryePlGs7Ldx4cDAR94kNwdUttLLKpH+CnhrfkzxRKc8knOhPNZKLvSy01lECaJnBmQYXh8aju3aqtzldcYpFicGaDg6sd1eXYIOjOWVRZ0Diswjey/Ykf6kGLA1PqUR/qv6vUa0R/oiJJnctAIJcQ6ALruj02O7WszJjJuCd+v/U3x4EPb27h/4QAAAAAElFTkSuQmCC"></a>
         <a href=""><img src="data:image/png;base64,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"></a>
         <a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABuUlEQVRIie3Wv2sUQRTA8c9sohc4oohypknQIlhoZ6FEA7G2thMhpLe0SaFWNjYWIgg24UDwT7BSEhQRu4iIoHJaHFH8yWFOTcZic9nT09zu6YHFfbsd5r3ve7OzO8OAAX0idJsQD9pulzHBHomSNWWMCkrpBE18NqRhXVP01nv18NjXQuJ43IxgDpOYwFieAn9NgzpqeCa6EZbc+aM4TjuNhR5EeQo5ExZVO8SRYNpLaZf9oGbRvpAWIdkcPqLSRylMmLG39ZCJh+3PFV4ZJ/T4JqLJTvFQzm5PznH9IYemiovXsuYycbQjd4IDh7m6xMVb6QrkJdjZKQ7K+TNIl/vEKapPmL3AtlL3mLbm2jsuJm4xUmb2PAvLaSFbkRjtFP8tMdL8svWc9fRTguHNwaCRDRdgtcHNy1Qv8a259dzEx05x1CgkjJHbVa6d4109Z4wPneLgU+6Onz7iylmW7xUpFZk4+2Uec1TiftfQyjhvXqcdFyUxFe6mjmxzffciV/DKq96ksOp5VkOLB1akx1i/qG04fhZvnBrz9LS3uxExH9py/x8Xgd9maF19ErsFI//q6jNgQN/4AR8QhIwXZx0rAAAAAElFTkSuQmCC"></a>
        </div>
        <br>
        <a href="" class="endtext">powered by <span>menuface.com</span></a>
     </div>
     <div id="myModal" class="modal" @if($open) style="display: block" @else style="display: none" @endif onclick="open_model()">
        @if($open)<style>body {overflow: hidden;}</style>@else<style>body {overflow: unset;}</style>@endif
         <!-- Modal content -->
         <div class="modal-content">
            <span class="close" wire:click="close_model" onclick="close_model()">&times;</span>
        </div>
        <img class="modeli" src="{{ asset('storage/' . $photo) }}" alt="Smash">
        <h2 class="title">{{ $title }}</h2>
        <center>
            <p class="desc" style="opacity: 0.6;">{{ $desc }}</p>
            <div class="qty">
                <button id="dec" class="btnq"
                    style="border-bottom-left-radius: 12px;border-top-left-radius: 12px;">-</button>
                <input name="qty" type="number" value="1" class="textnumber" id="qty" max="1" readonly>
                <button id="inc" class="btnq"
                    style="border-bottom-right-radius: 12px;border-top-right-radius: 12px;">+</button>
            </div>
        </center>
        <section class="light"` style="margin-bottom: 300px;" id="form_calc">
        @if (count($variations) > 0)
            @foreach ($variations as $v)
                @if (count($v->variations_adds) > 1)
                <div class="check">
                    @if (app()->getLocale() == 'en')
                        <h3>{{ $v->title_en }} <span style="opacity: 0.6;color:red;font-size:12px"> {{ ($v->req==1) ? 'required' : '' }} </span></h3>
                    @else
                        <h3>{{ $v->title_ar }} <span style="opacity: 0.6;color:red;font-size:12px"> {{ ($v->req==1) ? 'required' : '' }} </span></h3>
                    @endif
                    <hr>
                    @if ($v->req == 1)
                        <input type="hidden" id="required" value="1">
                    @endif
                    <div class="checkbox-group {{ ($v->req==1) ? 'required' : '' }}">
                    @foreach ($v->variations_adds as $key => $add)
                    @if (app()->getLocale() == 'en')
                        <label>
                            <input type="radio" name="{{ $v->id }}" id="add_v" value="{{ $add->price }}" title="{{ $add->title_en }}" id_v="{{ $v->id }}" onclick="ShowHideDiv(this)">
                            <span class="design"></span>
                            <span class="text" style="opacity: 0.6; width:100%" id="add_{{ $v->id }}">
                                <span style="float: right;">{{ $add->price }} JD</span>
                                <span style="float: left;">{{ $add->title_en }}</span>
                            </span>
                        </label>
                    @else
                        <label>
                            <input type="radio" name="{{ $v->id }}" id="add_v" value="{{ $add->price }}" title="{{ $add->title_ar }}" id_v="{{ $v->id }}" onclick="ShowHideDiv(this)">
                            <span class="design"></span>
                            <span class="text" style="opacity: 0.6; width:100%" id="add_{{ $v->id }}">
                                <span style="float: right;">{{ $add->price }} JD</span>
                                <span style="float: left;">{{ $add->title_en }}</span>
                            </span>
                        </label>
                    @endif
                    @endforeach
                    </div>
                </div>
                @endif   
                @if ($loop->last)
                    <input type="hidden" id="key" value="{{$i}}">
                @endif 
            @endforeach
        @endif
        @if (count($adds) > 0)
        <div class="check">
            <h3>{{ __('text.additions') }}</h3>
            <hr>
            <div class="">
                @foreach ($adds as $add)
                @if (app()->getLocale() == 'en')
                <label>
                    <input type="checkbox" name="adds" id="add_v" value="{{ $add->price }}" id_v="{{ $add->id }}" title="{{ $add->name_en }}" onclick="ShowHideDiv(this)">
                    <span class="design"></span>
                    <span class="text" style="opacity: 0.6; width:100%" id="add_{{ $v->id }}">
                        <span style="float: right;">{{ $add->price }} JD</span>
                        <span style="float: left;">{{ $add->name_en }}</span>
                    </span>
                </label>
                @else
                <label>
                    <input type="checkbox" name="adds" id="add_v" value="{{ $add->price }}" id_v="{{ $add->id }}" title="{{ $add->name_ar }}" onclick="ShowHideDiv(this)">
                    <span class="design"></span>
                    <span class="text" style="opacity: 0.6; width:100%" id="add_{{ $add->id }}">
                        <span style="float: right;">{{ $add->price }} JD</span>
                        <span style="float: left;">{{ $add->name_ar }}</span>
                    </span>
                </label>
                @endif
                @endforeach
            </div>  <link rel="stylesheet" href="{{ url('front/index.css') }}">
            <link rel="stylesheet" href="{{ url('front/checkout.css') }}">
            <link rel="stylesheet" href="{{ url('front/nav.css') }}">
        </div>
        @endif
        <input type="hidden" id="checkd" value="0">
        </section>
        <div class="mybutton">
            <input type="text" class="textuuuu" placeholder="{{ __('text.note') }}" id="notes">
            <input type="hidden" id="item_id" value="{{ $item_id }}">
            <input type="hidden" id="item_img" value="{{ $photo }}">
            <input type="hidden" id="item_title" value="{{ $title }}">
            <input type="hidden" id="item_price" value="{{ $price }}">
            <button class="curt" id='curt' style="font-weight:bold" onclick="addProduct()">
                <span style="float: right;padding: 10px;" id="jd">{{ $price }} JD</span>
                <span style="float: left;padding: 10px;">{{ __('text.add_to') }}</span>
            </button>
        </div>
    </div>
    @push('scripts')
    <script>
        fetchCart();
		function fetchCart() {
			const cart = JSON.parse(localStorage.getItem('products_'+{{ $menu->id }}));
			var total = 0;
            if (cart != null) {
                if (cart.length > 0) {
			    $('.button_cart').css('display','block');
                for (var i = 0; i < cart.length; i++) {
				    total += cart[i].item_price;
			    }
			    $('#cart_r').text(total+' JD');
			    $('#cart_l').text(cart.length);
                 } else {
			        $('.button_cart').css('display','none');
                }
            } else {
                $('.button_cart').css('display','none');
            }
		}
        function open_panel($id) {
            fetchCart();
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

        function close_model() {
            fetchCart();
            var item_id = $('#notes').val('');
        }

        function open_model() {
            document.getElementById("navopen").style.display = 'block';    
        }

        function open_model2() {
            document.getElementById("navopen").style.display = 'none';    
        }

        function hideButton() {
            $('.button_cart').css('display','none');
        }

        function addProduct(){
            var required = document.getElementById('required');
            var error_r = false;
            if (required != null) {
                if (required.value > 0) {
                    error_r = false;
                    $('.required').each(function(i, obj) {
                        if ($(this).find(':radio:checked').length > 0) {
                            error_r = true;
                        } else {
                            error_r = false;
                        }
                    });
                    if (error_r) {
                        pushStore();
                        @this.close_model();
                        fetchCart();
                        toastr.success("{{ __('text.sccsses') }}"); 
                    } else {
                        toastr.error("{{ __('text.required_checkout') }}");
                    }
                }
            } else {
                pushStore();
                @this.close_model();
                fetchCart();
                toastr.success("{{ __('text.sccsses') }}"); 
            }
        }

        function pushStore() {
            var item_id = $('#item_id').val();
            var notes = $('#notes').val();
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

            let products_{{ $menu->id }} = [];
            if(localStorage.getItem('products_'+{{ $menu->id }})){
                products_{{ $menu->id }} = JSON.parse(localStorage.getItem('products_'+{{ $menu->id }}));
            }
            products_{{ $menu->id }}.push(
            {
                'item_id' : item_id ,
                'item_img' : item_img ,
                'item_title' : item_title ,
                'item_price' : price ,
                'price' : price ,
                'random' : parseInt((Math.random() * 1000000)),
                'qty' : qty ,
                'notes' : notes ,
                'acc' : acc ,
            });
            localStorage.setItem('products_'+{{ $menu->id }}, JSON.stringify(products_{{ $menu->id }}));
        }

        function removeProduct(productId){
            let storageProducts = JSON.parse(localStorage.getItem('products'));
            console.log(storageProducts);
            if (storageProducts != null) {
                let products_{{ $menu->id }} = storageProducts.filter(products_{{ $menu->id }} => products_{{ $menu->id }}.item_id !== productId );
                localStorage.setItem('products_'+{{ $menu->id }}, JSON.stringify(products_{{ $menu->id }}));
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
            $("#jd").text(totalPrice + ' JD');  
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
            $("#jd").text(totalPrice + ' JD');  
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
                $("#jd").text(totalPrice + 'JD');  
                $('#qty').val(qty);
            }
        });
    </script>
    @endpush
    <script src="{{ url('front/navopen.js') }}"></script>
</div>

<div>
    @livewire('front.front-header',['id'=>$menu->id , 'type' => $type])
    <div class="category animate__animated animate__backInRight">
        @foreach ($category as $cat)
            <div class="cat" wire:click="item({{ $cat->id }})" 
                @if(isset($avtive[$cat->id]))  
                    @if ($theme == 'Dark')
                        style="background: white;color:black"
                    @else 
                        style="background: black;color:white"
                    @endif
                @endif>
                @if(file_exists('storage/' . $cat->img)) 
                    <img src="{{ asset('storage/' . $cat->img) }}" class="btni">
                @else
                    <img class="btni" src="{{ asset('empty.png') }}" alt="">
                @endif
                @if (app()->getLocale() == 'en')
                    <p>{{ $cat->name_en }}</p>
                @else
                    <p>{{ $cat->name_ar }}</p>
                @endif
            </div>
        @endforeach
    </div>
    <center>
        <div class="loader" wire:loading></div>
    </center>
    <center>
        <div class="cards animate__animated animate__backInUp">
            @foreach ($items as $item)
                <div class="card" wire:click="modal({{ $item->id }})" onclick="hideButton()">
                    <div class="letf">
                        @if(file_exists('storage/' . $item->img)) 
                            <img src="{{ asset('storage/' . $item->img) }}" class="btni">
                        @else
                            <img class="btni" src="{{ asset('empty.png') }}" alt="">
                        @endif
                    </div>
                    <div class="right">
                        @if (app()->getLocale() == 'en')
                            <p class="title">{{ $item->name_en }}</p>
                        @else
                            <p class="title">{{ $item->name_ar }}</p>
                        @endif
                        @if ($item->price == 0)
                            <p>{{ __('text.Priceasperchoice') }}</p>
                        @else
                        <p>{{ $item->price }} JD</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </center>
    @if ($type == 'order')
        <div class="button_cart" wire:ignore style="display: none">
            <button class="button_carts">
                <span id="cart_r" style="float: right;"></span>
                <a href="/{{ $menu->name }}/{{ $menu->id }}/checkout">{{ __('text.view_cart') }}</a>
                <span id="cart_l" style="float: left;"></span>
            </button>
        </div>
    @endif
    @livewire('front.front-footer',['id'=>$menu->id , 'type' => $type ,'theme' => $theme])
    <div id="myModal" class="modal"
        @if ($open) style="z-index: 80;display: block" @else style="z-index: 80;display: none" @endif
        onclick="open_model()">
        @if ($open)
            <style>
                body {
                    overflow: hidden;
                }
        </style>@else<style>
                body {
                    overflow: unset;
                }
            </style>
        @endif
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" wire:click="close_model" onclick="close_model()">&times;</span>
        </div>
        @if(file_exists('storage/' . $photo)) 
        <img class="modeli" src="{{ asset('storage/' . $photo) }}" alt="Smash">
        @else
            <img class="modeli" src="{{ asset('empty.png') }}" alt="">
        @endif
        <h2 class="title">{{ $title }}</h2>
        <center>
            <p class="desc" style="opacity: 0.6;">{{ $desc }}</p>
        </center>
        @if ($type == 'order')
            <center>
                <div class="qty">
                    <button id="dec" class="btnq"
                        style="border-bottom-left-radius: 12px;border-top-left-radius: 12px;">-</button>
                    <input name="qty" type="number" value="1" class="textnumber" id="qty" max="1"
                        readonly>
                    <button id="inc" class="btnq"
                        style="border-bottom-right-radius: 12px;border-top-right-radius: 12px;">+</button>
                </div>
            </center>
        @endif
        <section class="light" style="margin-bottom: 300px;" id="form_calc">
            @if ($type == 'order')
                @if (count($variations) > 0)
                    @foreach ($variations as $v)
                        @if (count($v->variations_adds) > 1)
                            <div class="check">
                                @if (app()->getLocale() == 'en')
                                    <h3>{{ $v->title_en }} <span style="opacity: 0.6;color:red;font-size:12px">
                                            {{ $v->req == 1 ? 'required' : '' }} </span></h3>
                                @else
                                    <h3>{{ $v->title_ar }} <span style="opacity: 0.6;color:red;font-size:12px">
                                            {{ $v->req == 1 ? 'required' : '' }} </span></h3>
                                @endif
                                <hr>
                                @if ($v->req == 1)
                                    <input type="hidden" id="required" value="1">
                                @endif
                                <div class="checkbox-group {{ $v->req == 1 ? 'required' : '' }}">
                                    @foreach ($v->variations_adds as $key => $add)
                                        @if (app()->getLocale() == 'en')
                                            <label>
                                                <input type="radio" name="{{ $v->id }}" id="add_v"
                                                    value="{{ $add->price }}" title="{{ $add->title_en }}"
                                                    id_v="{{ $v->id }}" onclick="ShowHideDiv(this)">
                                                <span class="design"></span>
                                                <span class="text" style="opacity: 0.6; width:100%"
                                                    id="add_{{ $v->id }}">
                                                    <span style="float: right;">{{ $add->price }} JD</span>
                                                    <span style="float: left;">{{ $add->title_en }}</span>
                                                </span>
                                            </label>
                                        @else
                                            <label>
                                                <input type="radio" name="{{ $v->id }}" id="add_v"
                                                    value="{{ $add->price }}" title="{{ $add->title_ar }}"
                                                    id_v="{{ $v->id }}" onclick="ShowHideDiv(this)">
                                                <span class="design"></span>
                                                <span class="text" style="opacity: 0.6; width:100%"
                                                    id="add_{{ $v->id }}">
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
                            <input type="hidden" id="key" value="{{ $i }}">
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
                                        <input type="checkbox" name="adds" id="add_v"
                                            value="{{ $add->price }}" id_v="{{ $add->id }}"
                                            title="{{ $add->name_en }}" onclick="ShowHideDiv(this)">
                                        <span class="design"></span>
                                        <span class="text" style="opacity: 0.6; width:100%"
                                            id="add_{{ $add->id }}">
                                            <span style="float: right;">{{ $add->price }} JD</span>
                                            <span style="float: left;">{{ $add->name_en }}</span>
                                        </span>
                                    </label>
                                @else
                                    <label>
                                        <input type="checkbox" name="adds" id="add_v"
                                            value="{{ $add->price }}" id_v="{{ $add->id }}"
                                            title="{{ $add->name_ar }}" onclick="ShowHideDiv(this)">
                                        <span class="design"></span>
                                        <span class="text" style="opacity: 0.6; width:100%"
                                            id="add_{{ $add->id }}">
                                            <span style="float: right;">{{ $add->price }} JD</span>
                                            <span style="float: left;">{{ $add->name_ar }}</span>
                                        </span>
                                    </label>
                                @endif
                            @endforeach
                        </div>
                        <link rel="stylesheet" href="{{ url('front/index.css') }}">
                        <link rel="stylesheet" href="{{ url('front/checkout.css') }}">
                        <link rel="stylesheet" href="{{ url('front/nav.css') }}">
                    </div>
                @endif
            @endif
            <input type="hidden" id="checkd" value="0">
        </section>
        @if ($type == 'order')
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
        @endif
    </div>
    @push('scripts')
        <script>
            fetchCart();

            function fetchCart() {
                const cart = JSON.parse(localStorage.getItem('products_' + {{ $menu->id }}));
                var total = 0;
                if (cart != null) {
                    if (cart.length > 0) {
                        $('.button_cart').css('display', 'block');
                        for (var i = 0; i < cart.length; i++) {
                            total += cart[i].item_price;
                        }
                        $('#cart_r').text(total + ' JD');
                        $('#cart_l').text(cart.length);
                    } else {
                        $('.button_cart').css('display', 'none');
                    }
                } else {
                    $('.button_cart').css('display', 'none');
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
                $('.button_cart').css('display', 'none');
            }

            function addProduct() {
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
                if (key != null) {
                    key = key.val();
                } else {
                    key = 0;
                }
                var item_price = $('#item_price').val();
                var price = 0;
                var price_checked = 0;
                let acc = [];
                $('input[type=checkbox], input[type=radio]').each(function() {
                    if ($(this).is(':checked')) {
                        acc.push({
                            'title': $(this).attr("title"),
                            'v_id': $(this).attr("id_v"),
                            'v_price': parseFloat($(this).val()),
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
                if (localStorage.getItem('products_' + {{ $menu->id }})) {
                    products_{{ $menu->id }} = JSON.parse(localStorage.getItem('products_' + {{ $menu->id }}));
                }
                products_{{ $menu->id }}.push({
                    'item_id': item_id,
                    'item_img': item_img,
                    'item_title': item_title,
                    'item_price': price,
                    'price': price,
                    'random': parseInt((Math.random() * 1000000)),
                    'qty': qty,
                    'notes': notes,
                    'acc': acc,
                });
                localStorage.setItem('products_' + {{ $menu->id }}, JSON.stringify(products_{{ $menu->id }}));
            }

            function removeProduct(productId) {
                let storageProducts = JSON.parse(localStorage.getItem('products'));
                console.log(storageProducts);
                if (storageProducts != null) {
                    let products_{{ $menu->id }} = storageProducts.filter(products_{{ $menu->id }} =>
                        products_{{ $menu->id }}.item_id !== productId);
                    localStorage.setItem('products_' + {{ $menu->id }}, JSON.stringify(products_{{ $menu->id }}));
                }
            }

            $("#form_calc").change(function() {
                var qty = parseInt($('#qty').val());
                var checkd = 0;
                var totalPrice = parseFloat($('#item_price').val()),
                    values = [];
                $('input[type=checkbox], input[type=radio]').each(function() {
                    if ($(this).is(':checked')) {
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

            $("#inc").click(function() {
                var qty = parseInt($('#qty').val());
                var checkd = parseFloat($('#checkd').val());
                var totalPrice = parseFloat($('#item_price').val());
                qty++;
                totalPrice = totalPrice * qty;
                checkd = qty * checkd;
                totalPrice = totalPrice + checkd;
                $("#jd").text(totalPrice + ' JD');
                $('#qty').val(qty);
            });

            $("#dec").click(function() {
                var qty = parseInt($('#qty').val());
                var checkd = parseFloat($('#checkd').val());
                var totalPrice = parseFloat($('#item_price').val());
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

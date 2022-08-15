<div>
    <style>
        .actives {
            color: {{ $menu->text }};
        }

        .accordion {
            color: {{ $menu->text }};
        }

        .curt {
            background-color: {{ $menu->color }};
        }
        .title {
            color: {{ $menu->text }};
        }
        .light {
            --primary: {{ $menu->text }};
        }
        .textuuuu {
            border: 1px solid {{ $menu->text }};
        }
        .textnumber {
            border: 1px solid {{ $menu->text }};
        }
        .btnq {
            background-color: {{ $menu->color }};
            color: {{ $menu->text }};        
        }
    </style>
    <div class="top-container">
        <center>
            <img class="logo" src="{{ asset('storage/' . $menu->logo) }}" alt="">
            <p class="desc">{{ $menu->name }}</p>
            <p class="desc" style="opacity: 0.6;">{{ $menu->desc }}</p>
        </center>
    </div>
    <nav class="navigation fixed" id="nav">
        @foreach ($category as $cat)
            <a href="#{{ $cat->id }}" onclick="open_panel('{{ $cat->id }}')" class=""
                id="act_{{ $cat->id }}"   wire:ignore.self>{{ $cat->name_en }}</a>
        @endforeach
    </nav>
    <div class="content">
        @foreach ($category as $cat)
            <button class="accordion" onclick="open_panel('{{ $cat->id }}')">{{ $cat->name_en }}</button>
            <div class="panel" id="{{ $cat->id }}"   wire:ignore.self>
                @foreach ($this->item($cat->id) as $item)
                    <div class="cards" wire:click="modal({{ $item->id }})">
                        <div class="card" style="background-color: transparent;">
                            <img class="cardm" src="{{ asset('storage/' . $item->img) }}">
                            <section id="text">
                                <div class="container">
                                    <h4><b>{{ $item->name_en }}</b></h4>
                                    <p>{{ $item->price }} JD</p>
                                </div>
                            </section>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    <div class="mybutton">
        <button class="curt">Checkout</button>
    </div>
    <div id="myModal" class="modal" @if($open) style="display: block" @else style="display: none" @endif>
        @if($open)<style>body {overflow: hidden;}</style>@else<style>body {overflow: unset;}</style>@endif
         <!-- Modal content -->
         <div class="modal-content">
            <span class="close" wire:click="close_model">&times;</span>
        </div>
        <img class="modeli" src="{{ asset('storage/' . $photo) }}" alt="Smash">
        <h2 class="title">{{ $title }}</h2>
        <center><p class="desc" style="opacity: 0.6;">{{ $desc }}</p></center>
        <section class="light"` style="margin-bottom: 300px;">
        @if (count($variations) > 0)
            @foreach ($variations as $v)
                @if (count($v->variations_adds) > 0)
                    <h3>{{ $v->title_en }} <span style="opacity: 0.6;color:red;font-size:12px"> {{ ($v->req==1) ? 'required' : '' }} </span></h3>
                    <hr>
                    <div class="checkbox-group">
                    @foreach ($v->variations_adds as $add)
                        <label>
                            <input type="radio" name="{{ $v->id }}" id="add_{{ $v->id }}" value="{{ $add->price }}">
                            <span class="design"></span>
                            <span class="text" style="opacity: 0.6;" id="add_{{ $v->id }}">{{ $add->title_en }} - ({{ $add->price }} JD)</span>
                        </label>
                    @endforeach
                    </div>
                    <br>
                @endif    
            @endforeach
        @endif
        </section>
        <div class="mybutton">
            <input type="text" class="textuuuu" placeholder="note">
            <div class="qty">
                <button onclick="dec('qty')" class="btnq"
                    style="border-bottom-left-radius: 12px;border-top-left-radius: 12px;">-</button>
                <input name="qty" type="number" value="1" class="textnumber" id="qty">
                <button onclick="inc('qty')" class="btnq"
                    style="border-bottom-right-radius: 12px;border-top-right-radius: 12px;">+</button>
            </div>
            <input type="hidden" id="item_id" value="{{ $item_id }}">
            <input type="hidden" id="item_img" value="{{ $photo }}">
            <input type="hidden" id="item_title" value="{{ $title }}">
            <input type="hidden" id="item_price" value="{{ $price }}">
            <button class="curt" id='curt' style="font-weight:bold" onclick="addProduct()">Add to cart ({{ $price }}JD)</button>
        </div>
    </div>
    <script src="{{ url('front/index.js') }}"></script>
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var header = document.getElementById("nav");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
    <script>
        $("#nav").scrollspy({
            offset: -85
        });

        function check(id) {
            document.getElementById('page11').checked = false;
        }
    </script>
</div>
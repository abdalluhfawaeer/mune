<div>
    <div id="navopen">
    <div class="topnav" id="myTopnav" style="display: none">
        <a href="#home"><img class="logo2" src="{{ asset('storage/' . $menu->logo) }}" alt=""></a>
        <a href="#news">News</a> 
        <a href="#contact">Contact</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
          <i class="fa fa-bars"></i>
        </a>
        <a href="/{{ $menu->name }}/{{ $menu->id }}/checkout" class="icon" style="right: 54px;">
            <i class="fa fa-shopping-cart"></i>
          </a>
      </div>
    <nav class="navigation fixed" id="nav">
        @foreach ($category as $cat)
            <a href="#{{ $cat->id }}" onclick="open_panel('{{ $cat->id }}')" class=""
                id="act_{{ $cat->id }}"   wire:ignore.self>{{ $cat->name_en }}</a>
        @endforeach
    </nav>
</div>
    <div class="content" id="carsds">
        @foreach ($category as $cat)
        <div class="div">
            <img src="{{ asset('storage/' . $cat->img) }}" class="btni">
            <button class="accordion" onclick="open_panel('{{ $cat->id }}')">{{ $cat->name_en }}</button>
            <div class="panel" id="{{ $cat->id }}"   wire:ignore.self>
                @foreach ($this->item($cat->id) as $item)
                    <div class="cards" wire:click="modal({{ $item->id }})" onclick="open_model2()">
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
        </div>
        @endforeach
    </div>
    <div class="footer">
       <b>{{ $menu->name }}</b>
       <div class="link">
        <a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABy0lEQVRIie2Wyy8DURTGv3uNok3QKq3XjkRXJIh4RKZ2FhILtbS2s7MQOwt/gq3EThc2JE0k7SxFJB4RRRsRSkgNIaYqpnMtRNvpc3Q6Vv1Wk2/OOb+cm3tuDlDRP4nkMnk+wCkNMRflmENPcUUmj/TVHBQEt1wUzE/v9DHKvGCkSw80RWBhythMYGvqOC+Y5wMcs0nBskFTCrVwksvrnU38GlT12yr1GAAFgO6obHalG2owY3YDoDlrc+WoOTbkwOREB9qdFphMFFExjoXlvYI5usEDvXasLPaDpN0WSnIOS3nB7tHWJPTx6QOHJyLEl0/jwS32uuT3hjeM7d1bTXm0eEhhVXOpY5UTTHNeyR3Pz/VgfNgJu61W5c15unB9846l1YOC+SV33FhvQpvDDFM1zfLin1kvZJZK7vjo7BlfsoKRQQearDU/3qmI23sJ+4dPxoF9/gh8/gg62yxJsE+4g88f0ZSv+3KVqgq4AjZM6nEipPgAZuji6g0J5eepFJ/j+QMzaqvBL5Zz2KTwX7aQtfWglrDLZi6mClQdtSC4ZaIQD4CQVrAGhSiU2fR9C8iz3no8m1VR2ewChVMXUsFDMxcLZkIr+ld9A4gGjmUCvzRgAAAAAElFTkSuQmCC"></a>
        <a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAC7klEQVRIie3WTWxUZRTG8efMVMCmKoSiZUKxHSg1BRcorlywMiSEBRurRiRQI5FgujAqhKTYmLgxYECSaqMJEuNHwlKjkLgg4gIjISig8QNCDIwlpdNmSqUzve/5u0BK56MzUzsr5SRvchfvPb8857335kp36r9eVqtGib7B9phsI9CCdN2Djg80NR5Vp4XJPf2p+tS2xTdkRhG88uPr684/23CsarGXuiUPDO0VvASKA7q9dMZD7EmLZevd6za6syr9SqJTKkjc8enYagt8L2nz+U0Nn1TjNr97rQ/YDlIBeus6gOLuDFuwx4daF/+qTguxvC5Bq5HiDh+1H868KoonMrWW9g0+CrxYBtU/aA7nSGSh595Ll5+QpDzYTHWA3ImB3mr7MPPFQ4eGW6aDXXoaZGVQuSNgDuIFc05lXms+WgQHD+dubpy8ef2E28/JD4b3P/j+SGshDCSrQAVI2NaRXUvfngxZ0MlWHB79AXi4uBGATrrrK7m+Q+GiO28gPVMJBSkua07vXHK5JLz8HebqvpEOBfsG1FCY5nazsmdahAJk6rN3q7ste8vKG3XsntEdctsPOllDVEB6KipJdXmTDuEUZvtqjAr0Y+HzkZf4t+fnn8A5XWNUoKIPUv57bEYU9+ccrtUORQrRl+VhSX90LfzJQuwxD3wO+GxRh+Nje5adrQhLUmQTHZLGQRdmg95c/mYpoyQ8Lxf/1mEt0DYb1MWx8Z5lX1cN/969MCOxDkj/+6RcjUe2pVT/aWFJurLj/jOWDe0S+4BzwMQM0MiDNo/1tg5M17/yjwDYogOpLtz2ujO/CjQXXJtyryePlGs7Ldx4cDAR94kNwdUttLLKpH+CnhrfkzxRKc8knOhPNZKLvSy01lECaJnBmQYXh8aju3aqtzldcYpFicGaDg6sd1eXYIOjOWVRZ0Diswjey/Ykf6kGLA1PqUR/qv6vUa0R/oiJJnctAIJcQ6ALruj02O7WszJjJuCd+v/U3x4EPb27h/4QAAAAAElFTkSuQmCC"></a>
        <a href=""><img src="data:image/png;base64,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"></a>
        <a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABuUlEQVRIie3Wv2sUQRTA8c9sohc4oohypknQIlhoZ6FEA7G2thMhpLe0SaFWNjYWIgg24UDwT7BSEhQRu4iIoHJaHFH8yWFOTcZic9nT09zu6YHFfbsd5r3ve7OzO8OAAX0idJsQD9pulzHBHomSNWWMCkrpBE18NqRhXVP01nv18NjXQuJ43IxgDpOYwFieAn9NgzpqeCa6EZbc+aM4TjuNhR5EeQo5ExZVO8SRYNpLaZf9oGbRvpAWIdkcPqLSRylMmLG39ZCJh+3PFV4ZJ/T4JqLJTvFQzm5PznH9IYemiovXsuYycbQjd4IDh7m6xMVb6QrkJdjZKQ7K+TNIl/vEKapPmL3AtlL3mLbm2jsuJm4xUmb2PAvLaSFbkRjtFP8tMdL8svWc9fRTguHNwaCRDRdgtcHNy1Qv8a259dzEx05x1CgkjJHbVa6d4109Z4wPneLgU+6Onz7iylmW7xUpFZk4+2Uec1TiftfQyjhvXqcdFyUxFe6mjmxzffciV/DKq96ksOp5VkOLB1akx1i/qG04fhZvnBrz9LS3uxExH9py/x8Xgd9maF19ErsFI//q6jNgQN/4AR8QhIwXZx0rAAAAAElFTkSuQmCC"></a>
       </div>
       <a href="" class="endtext">powered by <span>menuface.com</span></a>
    </div>
    <div id="myModal" class="modal" @if($open) style="display: block" @else style="display: none" @endif onclick="open_model()">
        @if($open)<style>body {overflow: hidden;}</style>@else<style>body {overflow: unset;}</style>@endif
         <!-- Modal content -->
         <div class="modal-content">
            <span class="close" wire:click="close_model">&times;</span>
        </div>
        <img class="modeli" src="{{ asset('storage/' . $photo) }}" alt="Smash">
        <h2 class="title">{{ $title }}</h2>
        <center><p class="desc" style="opacity: 0.6;">{{ $desc }}</p></center>
        <section class="light"` style="margin-bottom: 300px;" id="form_calc">
        @if (count($variations) > 0)
            @foreach ($variations as $v)
                @if (count($v->variations_adds) > 1)
                <div class="check">
                    <h3>{{ $v->title_en }} <span style="opacity: 0.6;color:red;font-size:12px"> {{ ($v->req==1) ? 'required' : '' }} </span></h3>
                    <hr>
                    @if ($v->req == 1)
                        <input type="hidden" id="required" value="1">
                    @endif
                    <div class="checkbox-group {{ ($v->req==1) ? 'required' : '' }}">
                    @foreach ($v->variations_adds as $key => $add)
                        <label>
                            <input type="radio" name="{{ $v->id }}" id="add_v" value="{{ $add->price }}" title="{{ $add->title_en }}" id_v="{{ $v->id }}" onclick="ShowHideDiv(this)">
                            <span class="design"></span>
                            <span class="text" style="opacity: 0.6;" id="add_{{ $v->id }}">{{ $add->title_en }} - ({{ $add->price }} JD)</span>
                        </label>
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
            <h3>Adds</h3>
            <hr>
            <div class="">
                @foreach ($adds as $add)
                <label>
                    <input type="checkbox" name="adds" id="add_v" value="{{ $add->price }}" id_v="{{ $add->id }}" title="{{ $add->name_en }}" onclick="ShowHideDiv(this)">
                    <span class="design"></span>
                    <span class="text" style="opacity: 0.6;" id="add_{{ $v->id }}">{{ $add->name_en }} - ({{ $add->price }} JD)</span>
                </label>
                @endforeach
            </div>  <link rel="stylesheet" href="{{ url('front/index.css') }}">
            <link rel="stylesheet" href="{{ url('front/checkout.css') }}">
            <link rel="stylesheet" href="{{ url('front/nav.css') }}">
        </div>
        @endif
        <input type="hidden" id="checkd" value="0">
        </section>
        <div class="mybutton">
            <input type="text" class="textuuuu" placeholder="note">
            <div class="qty">
                <button id="dec" class="btnq"
                    style="border-bottom-left-radius: 12px;border-top-left-radius: 12px;">-</button>
                <input name="qty" type="number" value="1" class="textnumber" id="qty" max="1" readonly>
                <button id="inc" class="btnq"
                    style="border-bottom-right-radius: 12px;border-top-right-radius: 12px;">+</button>
            </div>
            <input type="hidden" id="item_id" value="{{ $item_id }}">
            <input type="hidden" id="item_img" value="{{ $photo }}">
            <input type="hidden" id="item_title" value="{{ $title }}">
            <input type="hidden" id="item_price" value="{{ $price }}">
            <button class="curt" id='curt' style="font-weight:bold" onclick="addProduct()">Add to cart <span>{{ $price }}</span>JD</button>
        </div>
    </div>
    <script src="{{ url('front/index.js') }}"></script>
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var header = document.getElementById("nav");
        var myTopnav = document.getElementById("myTopnav"); 
        var carsds = document.getElementById("carsds");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
                myTopnav.classList.add("sticky1");
                carsds.classList.add("carsds");
                myTopnav.style.display = 'block';
            } else {
                header.classList.remove("sticky");
                myTopnav.classList.remove("sticky1");
                carsds.classList.remove("carsds");
                myTopnav.style.display = 'none';
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
    <script>
        function myFunction1() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav sticky1") {
                x.className += " responsive";
                document.getElementById("nav").style.top = '155px';
            } else {
                x.className = "topnav sticky1";
                document.getElementById("nav").style.top = '60px';
            }
        }
    </script>
</div>
